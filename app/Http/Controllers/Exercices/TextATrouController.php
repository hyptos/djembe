<?php

namespace App\Http\Controllers\Exercices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class TextATrouController extends Controller {
    /**
     * test fonction.
     *
     * @param  none
     * @return Response
    */
    public function get()
    {
        return view('Exercices\TextATrou', []);
    }
    /**
     * Verify responses of user
     *
     * @param  none
     * @return Response
    */
    public function post(Request $request)
    {
        //récupérer les réponses possibles dans la base
        //$reponses array();
        //for ($i = 0; $i < 10; $i++) {
           // $reponses[i]=//cherche dans la base
        //}
         $reponses = array("maison", "rivière", "se", "ce", "poissons", "pont", "car", "amis", "aussi", "cette");
         var_dump($reponses);
        		  $erreur = 0 ;
        	      if ($request->input('a') != $reponses[0])
        		  { $erreur++; }
        	      if ($request->input('b')  != $reponses[1])
        		  { $erreur++ ; }
        		  if ($request->input('c')  != $reponses[2])
        		  { $erreur++ ; }
        		  if ($request->input('d')  !=$reponses[3])
        		  { $erreur++ ; }
        		  if ($request->input('e')  != $reponses[4])
        		  { $erreur++; }
        		  if ($request->input('f')  != $reponses[5])
        		  { $erreur++; }
        		  if ($request->input('g')  != $reponses[6])
        		  { $erreur++; }
        		  if ($request->input('h')  != $reponses[7])
        		  { $erreur++; }
        		  if ($request->input('i')  !=$reponses[8])
        		  { $erreur++; }
        		  if ($request->input('j')  != $reponses[9])
        		  { $erreur++; }
        		 $message = "";

        		if ($erreur == 0)
        		{
                    $message = "Aucune erreur. BRAVO !" ;

        		}
        		if ($erreur == 1)
        		{
                    $message = "Il reste encore 1 erreur à corriger. Courage !";

        		}
        		if ($erreur > 1)
        		{
                    $message = "Il reste encore " + $erreur + " erreurs à corriger. Courage !";

        		}
        return response()->json(['type' => 'success', 'message' => $message]);
    }
}
