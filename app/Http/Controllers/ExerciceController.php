<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercice;

class ExerciceController extends Controller
{

    /**
     * fonction qui affiche un exercice.
     *
     * @param  none
     * @return Response
    */
    public function get($id)
    {
        $exercice = Exercice::find($id);

        return view('getExercice', ['exercice' => $exercice]);
    }

    /* fonction qui affiche tous les exercices.
     *
     * @param  none
     * @return Response
    */
    public function getAll()
    {
        $exercices = Exercice::all();
        return view('getAllExercices', ['exercices' => $exercices]);
    }
}
