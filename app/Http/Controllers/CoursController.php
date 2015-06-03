<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{

    /**
     * fonction qui affiche un cours.
     *
     * @param  none
     * @return Response
    */
    public function get($id)
    {
        $cours = Cours::find($id);
        $chapitres = $cours->chapitres;
        return view('getCours', ['cours' => $cours, 'chapitres' => $chapitres]);
    }

    /* fonction qui affiche tous les cours.
     *
     * @param  none
     * @return Response
    */
    public function getAll()
    {
        $cours = Cours::all()->where('type' == 'solfege');
        return view('getAllCours', ['cours' => $cours]);
    }

    /* fonction qui affiche tous les cours.
     *
     * @param  none
     * @return Response
    */
    public function dashboardSolfege()
    {
        $cours = Cours::where('type', '=', 'solfege')->get();
        return view('dashboard', ['cours' => $cours]);
    }

    /* fonction qui affiche tous les cours.
     *
     * @param  none
     * @return Response
    */
    public function dashboardHistoire()
    {
        $cours = Cours::where('type', '=', 'histoire')->get();
        return view('dashboard', ['cours' => $cours]);
    }
/* fonction qui affiche tous les cours.
     *
     * @param  none
     * @return Response
    */
    public function dashboardInstruments()
    {
        $cours = Cours::where('type', '=', 'instruments')->get();
        return view('dashboard', ['cours' => $cours]);
    }



}
