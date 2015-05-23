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
}
