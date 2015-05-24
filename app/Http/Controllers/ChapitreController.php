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
        $chapitre = Chapitre::find($id);
        $exercices = $chapitre->questionnaire->questionnaireExo;
        $tab = array();
        foreach ($exercices as $value) {
            array_push($tab, $value->exercices);
        }
        return view('getChapitre', ['chapitre' => $chapitre, 'exercices' => $tab]);
    }
}
