<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercice;
use Auth;

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

        if (Auth::check()) {
            return view('getExercice', ['exercice' => $exercice]);
        } else {
            return redirect('login');
        }
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
