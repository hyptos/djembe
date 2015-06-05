<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\FuzzyLogicProvider;
use Illuminate\Http\Request;
use App\Models\Stats;
use App\Models\User;
use App\Models\Cours;
use App\Models\Exercice;

class FuzzyController extends Controller
{

    /**
     * Return an evaluation for an exercice
     *
     * @param  int  $nbErrors
     * @param  int  $nbResponses
     * @param  int  $time
     * @param  int  $timeAvg
     * @return [note, conseil]
     */
    public function evaluate(Request $request)
    {
        $nbErrors       = $request->input('nbErrors');
        $nbResponses    = $request->input('nbResponses');
        $time           = $request->input('time');
        $timeAvg        = $request->input('timeAvg');
        $idUser         = $request->input('idUser');
        $idCours        = $request->input('idCours');
        $idExercice     = $request->input('idExercice');


        $fuzzy = new FuzzyLogicProvider();

        $fuzzy->clearMembers();


        /* ----------
        pourcentage de erreurs &
        la vitesse de l'utilisateur pour finir l'exercice
        ---------*/
        $fuzzy->setInputNames(array('taux_err','vitesse'));

        /* -----
        input Taux D'erreurs (%) : {'faible', 'moyen', 'élevé'}
        --------*/
        $fuzzy->addMember($fuzzy->getInputName(0), 'faible', -50, 0, 50, LINFINITY);
        $fuzzy->addMember($fuzzy->getInputName(0), 'moyen', 0, 50, 100, TRIANGLE);
        $fuzzy->addMember($fuzzy->getInputName(0), 'eleve', 50, 100, 150, RINFINITY);

        /* -----
        définition des ensembles de l'input Vitesse (s) : {'rapide', 'normale', 'lente'}
        --------*/
        $fuzzy->addMember($fuzzy->getInputName(1), 'rapide', 0, $timeAvg/2, $timeAvg, LINFINITY);
        ///TODO : norme du temps variable
        $fuzzy->addMember($fuzzy->getInputName(1), 'normale', 0, $timeAvg, $timeAvg*2, TRIANGLE);
        $fuzzy->addMember($fuzzy->getInputName(1), 'lente', $timeAvg, $timeAvg*2, $timeAvg*3, RINFINITY);


        $fuzzy->setOutputNames(array('note', 'conseil'));

        /* -----
        output NOTE [0..100]
        ------ */
        $fuzzy->addMember($fuzzy->getOutputName(0), 'tr_mauvaise', -25, 0, 25, LINFINITY);
        $fuzzy->addMember($fuzzy->getOutputName(0), 'mauvaise', 0, 25, 50, TRIANGLE);
        $fuzzy->addMember($fuzzy->getOutputName(0), 'moyenne', 25, 50, 75, TRIANGLE);
        $fuzzy->addMember($fuzzy->getOutputName(0), 'bonne', 50, 75, 100, TRIANGLE);
        $fuzzy->addMember($fuzzy->getOutputName(0), 'tr_bonne', 75, 100, 125, RINFINITY);

        /* -----
        ouput Conseil ([0..1]) :
        ----- */
        $fuzzy->addMember($fuzzy->getOutputName(1), 'ralenti', -0.5, 0.0, 0.5, LINFINITY);
        $fuzzy->addMember($fuzzy->getOutputName(1), 'recommence', 0.0, 0.5, 1.0, TRIANGLE);
        $fuzzy->addMember($fuzzy->getOutputName(1), 'accelere', 0.5, 1.0, 1.5, RINFINITY);



        /* ---------- définition des règles --------- */
        $fuzzy->clearRules();

        /* ---------- Si le taux d'erreurs de l'utilisateur est faible (< 0.5) -------- */
        $fuzzy->addRule('IF taux_err.faible AND vitesse.rapide THEN note.tr_bonne');
        $fuzzy->addRule('IF taux_err.faible AND vitesse.normale THEN note.bonne');
        $fuzzy->addRule('IF taux_err.faible AND vitesse.lente THEN note.moyenne');

        /* ---------- Si le taux d'erreurs de l'utilisateur est moyen (~= 0.5) -------- */
        $fuzzy->addRule('IF taux_err.moyen AND vitesse.rapide THEN note.moyenne');
        $fuzzy->addRule('IF taux_err.moyen AND vitesse.normale THEN note.moyenne');
        $fuzzy->addRule('IF taux_err.moyen AND vitesse.lente THEN note.mauvaise');


        /* ---------- Si le taux d'erreurs de l'utilisateur est élevé (> 0.5) -------- */
        $fuzzy->addRule('IF taux_err.eleve AND vitesse.rapide THEN note.tr_mauvaise');
        $fuzzy->addRule('IF taux_err.eleve AND vitesse.normale THEN note.mauvaise');
        $fuzzy->addRule('IF taux_err.eleve AND vitesse.lente THEN note.tr_mauvaise');


        /* ---------- Pour les cas où la note est moyenne (~= 50) ------- */
        $fuzzy->addRule('IF taux_err.faible AND vitesse.lente THEN conseil.accelere');
        $fuzzy->addRule('IF taux_err.moyen AND vitesse.rapide THEN conseil.ralenti');
        $fuzzy->addRule('IF taux_err.moyen AND vitesse.normale THEN conseil.recommence');

        $fuzzy->SetRealInput('taux_err', $nbErrors*100 / $nbResponses);
        $fuzzy->SetRealInput('vitesse', $time);

        


        /* ------
        on lance le calcul en logique floue et
        récupère les valeurs qui nous interesse
        ------ */
        $res = $fuzzy->calcFuzzy();

        if($res['note'] < 0.0)
            $res['note'] = 0.0;
        else if($res['note'] > 100.0)
            $res['note'] = 100.0;

        if($nbResponses == 1){
            if($nbErrors >= 1){
                $res['conseil'] = "Hmm, ce n'est pas encore ça.
                 Veux tu réessayer l'exercice ?";
                $res['smiley'] = '/images/bad.png';
            }
            else{
                $res['conseil'] = "C'est très bien ! Prêt pour la suite ?";
                $res['smiley'] = '/images/good.png';
            }

            $res['choix'] = ['Recommencer', 'Continuer'];
        }
        else
            $res = $this->noteConseil($res, $res['note']);

        $res['error'] = $nbErrors;
        // Sauvegarde en base des résultats
        $stat = new Stats();

        $stat->temps = $time;
        $stat->reussite = $res['note'];
        $stat->avancement = '100';

        $user = User::find($idUser);
        $cours = Cours::find($idCours);
        $exercice = Exercice::find($idExercice);

        $stat->user_id = $user->id;
        $stat->cours_id = $cours->id;
        $stat->exercice_id = $exercice->id;
        $stat->save();

        return response()->json($res);
    }

    public function ajaxNoteConseil(Request $request)
    {
        $note = $request->input('note');
        $res = $this->noteConseil(array(), $note);
        return response()->json($res);
    }

    public function noteConseil($res, $note)
    {
        /* ------ on clarifie le retour du conseil ------ */
        /* --- si le résultat est "très mauvais" --- */
        if ($note < 12.5) {
            $res['conseil'] = "Oups, tu as fait beaucoup d'erreurs. Veux tu revoir le cours ?";
            $res['smiley'] = '/images/very_bad.png';
            $res['choix'] = ['Revoir_cours', 'Plus_facile', 'Recommencer'];
        } /* --- si le résultat est "mauvais" --- */
        elseif ($note < 27.5) {
            $res['conseil'] = "Hmm, ce n'est pas encore ça.
            Veux tu essayer le même exercice en plus facile ?";
            $res['smiley'] = '/images/bad.png';
            $res['choix'] = ['Plus_facile', 'Recommencer'];
        } /* --- si le résultat est "moyen" --- */
        elseif ($note < 62.5) {
            $res['smiley'] = '/images/medium.png';
            $res['choix'] = ['Recommencer'];
            
            /* ---- On regarde le conseil défini dans fuzzy ---- */
            if ($res['conseil'] < 0.25) {
                $res['conseil'] .= "Tu fais encore quelques erreurs.
                 Essai d'aller un peu moins vite.";
            } elseif ($res['conseil'] < 0.75) {
                $res['conseil'] .= "Tu fais encore quelques erreurs.
                 Recommence tu va y arriver.";
            } else {
                $res['conseil'] = "C'est bien tu fais peu d'erreurs,
                mais tu prends encore un peu trop ton temps.
                M0aintenant essai d'aller un peu plus vite.";
            }
        } elseif ($note < 77.5) {
            $res['smiley'] = '/images/good.png';
            $res['conseil'] = "C'est bien. Prêt pour la suite ?";
            $res['choix'] = ['Recommencer', 'ContinuerHard', 'Continuer'];
        } else {
            $res['smiley'] = '/images/very_good.png';
            $res['conseil'] = "C'est très bien ! Prêt pour la suite ?";
            $res['choix'] = ['Recommencer', 'ContinuerHard', 'Continuer'];
        }
        return $res;
    }
}
