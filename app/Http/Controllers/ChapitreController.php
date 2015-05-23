<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapitre;

class ChapitreController extends Controller {

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
        return view('getChapitre', ['chapitre' => $chapitre, 'exercices' => $exercices]);
    }

}
