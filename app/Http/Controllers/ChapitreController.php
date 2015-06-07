<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapitre;
use App\Models\QuestionnaireExo;

class ChapitreController extends Controller
{

    /**
     * fonction qui affiche un cours.
     *
     * @param  none
     * @return Response
    */
    public function get($id)
    {
        $tab = array();
        $chapitre = Chapitre::find($id);
        $exercices = $chapitre->questionnaire;
        if (isset($exercices)) {
            $exercices = $exercices->questionnaireExo;
            foreach ($exercices as $value) {
                array_push($tab, $value->exercices);
            }
        }
        return view('getChapitre', ['chapitre' => $chapitre, 'exercices' => $tab]);
    }

    /* fonction qui affiche tous les chapitre.
     *
     * @param  none
     * @return Response
    */
    public function getAll()
    {
        $chapitres = Chapitre::all();
        return view('getAllChapitres', ['chapitres' => $chapitres]);
    }

    /* fonction qui affiche tous les chapitre.
     *
     * @param  none
     * @return Response
    */
    public function getChapitreContent(Request $request)
    {
        $id = $request->input('idChapitre');
        $chapitre = Chapitre::find($id);
        return  response()->json($chapitre);
    }
}
