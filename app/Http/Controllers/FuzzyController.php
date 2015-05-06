<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\FuzzyLogicProvider;

class FuzzyController extends Controller {

	/**
     * Return an evaluation for an exercice
     *
     * @param  int  $nbErrors
     * @param  int 	$nbResponses
     * @param  int  $time
     * @param  int  $timeAvg
     * @return [note, conseil]
     */
	public function evaluate($nbErrors, $nbResponses, $time, $timeAvg)
	{

		$fuzzy = new FuzzyLogicProvider();

		$fuzzy->clearMembers();


		/* ---------- définition des inputs : pourcentage de erreurs & la vitessep de l'utilisateur our finir l'exercice ---------*/
		$fuzzy->setInputNames(array('taux_err','vitesse'));

		/* ----- définition des ensembles de l'input Taux D'erreurs (%) : {'faible', 'moyen', 'élevé'} --------*/
		$fuzzy->addMember($fuzzy->getInputName(0), 'faible', -0.5, 0.0, 0.5, LINFINITY);
		$fuzzy->addMember($fuzzy->getInputName(0), 'moyen', 0.0, 0.5, 1, TRIANGLE);
		$fuzzy->addMember($fuzzy->getInputName(0), 'eleve', 0.5, 1,  1.5, RINFINITY);

		/* ----- définition des ensembles de l'input Vitesse (s) : {'rapide', 'normale', 'lente'} --------*/
		$fuzzy->addMember($fuzzy->getInputName(1), 'rapide', 0, $timeAvg/2, $timeAvg, LINFINITY);		///TODO : norme du temps variable
		$fuzzy->addMember($fuzzy->getInputName(1), 'normale', 0, $timeAvg, $timeAvg*2, TRIANGLE);
		$fuzzy->addMember($fuzzy->getInputName(1), 'lente', $timeAvg, $timeAvg*2,  $timeAvg*3, RINFINITY);

		/* ---------- définition de l'output : note ---------*/
		$fuzzy->setOutputNames(array('note', 'conseil'));

		/* ----- défintion des ensembles de l'output NOTE [0..100] : {'très mauvaise', 'mauvaise', 'moyenne', 'bonne', 'très bonne'} ------ */
		$fuzzy->addMember($fuzzy->getOutputName(0), 'tr_mauvaise', -25, 0, 25, LINFINITY);
		$fuzzy->addMember($fuzzy->getOutputName(0), 'mauvaise', 0, 25, 50, TRIANGLE);
		$fuzzy->addMember($fuzzy->getOutputName(0), 'moyenne', 25, 50, 75, TRIANGLE);
		$fuzzy->addMember($fuzzy->getOutputName(0), 'bonne', 50, 75, 100, TRIANGLE);
		$fuzzy->addMember($fuzzy->getOutputName(0), 'tr_bonne', 75, 100, 125, RINFINITY);

		/* ----- définition de l'ouput Conseil ([0..1]) : {'ralenti', 'recommence', 'accélère'} ----- */
		$fuzzy->addMember($fuzzy->getOutputName(1), 'ralenti', -0.5, 0.0, 0.5, LINFINITY);
		$fuzzy->addMember($fuzzy->getOutputName(1), 'recommence', 0.0, 0.5, 1.0, TRIANGLE);
		$fuzzy->addMember($fuzzy->getOutputName(1), 'accelere', 0.5, 1.0, 1.5, RINFINITY);



		/* ---------- définition des règles --------- */
		$fuzzy->clearRules();

		/* ---------- Si le taux d'erreurs de l'utilisateur est faible (< 0.5) -------- */
		$fuzzy->addRule('IF taux_err.faible AND vitesse.rapide THEN note.tr_bonne'); // Si vitesse rapide alors note très bonne
		$fuzzy->addRule('IF taux_err.faible AND vitesse.normale THEN note.bonne'); // Si vitesse normale alors note bonne
		$fuzzy->addRule('IF taux_err.faible AND vitesse.lente THEN note.moyenne'); // Si vitesse lente alors note moyenne

		/* ---------- Si le taux d'erreurs de l'utilisateur est moyen (~= 0.5) -------- */
		$fuzzy->addRule('IF taux_err.moyen AND vitesse.rapide THEN note.moyenne'); // Si vitesse rapide alors note moyenne (il a peut ètre été un peu trop vite)
		$fuzzy->addRule('IF taux_err.moyen AND vitesse.normale THEN note.moyenne'); // Si vitesse normale alors note moyenne
		$fuzzy->addRule('IF taux_err.moyen AND vitesse.lente THEN note.mauvaise'); // Si vitesse lente alors note mauvaise


		/* ---------- Si le taux d'erreurs de l'utilisateur est élevé (> 0.5) -------- */
		$fuzzy->addRule('IF taux_err.eleve AND vitesse.rapide THEN note.tr_mauvaise'); // Si vitesse rapide alors note très mauvaise
		$fuzzy->addRule('IF taux_err.eleve AND vitesse.normale THEN note.mauvaise'); // Si vitesse normale alors note mauvaise
		$fuzzy->addRule('IF taux_err.eleve AND vitesse.lente THEN note.tr_mauvaise'); // Si vitesse lente alors note très mauvaise


		/* ---------- Pour les cas où la note est moyenne (~= 50) ------- */
		$fuzzy->addRule('IF taux_err.faible AND vitesse.lente THEN conseil.accelere');	//Si vitesse lente alors accélère
		$fuzzy->addRule('IF taux_err.moyen AND vitesse.rapide THEN conseil.ralenti');	//Si vitesse rapide alors ralenti
		$fuzzy->addRule('IF taux_err.moyen AND vitesse.normale THEN conseil.recommence');	//Si vitesse normale alors recommence

		/* ------ on passe les valeurs à l'objet FuzzyLogic ------- */
		$fuzzy->SetRealInput('taux_err', $nbErrors / $nbResponses);
		$fuzzy->SetRealInput('vitesse', $time);

		/* ------ on lance le calcul en logique floue et récupère les valeurs qui nous interesse ------ */
		return $fuzzy->calcFuzzy();
	}
}
