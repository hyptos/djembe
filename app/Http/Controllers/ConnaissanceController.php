<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\User;
use App\Models\Connaissance;

class ConnaissanceController extends Controller
{
    /**
     * get average
     *
     * @param  none
     * @return Response
    */
    public function getCon(Request $request)
    {
        $res=Connaissance::where('user_id','=',Auth::user()->id)->get();
        return response()->json($res);
    }


    /**
     * calcul average.
     *
     * @param  none
     * @return Response
    */
    public function addAverage(Request $request)
    {
        $connai           = new Connaissance();
        $solfege_res = 0;
        //récupération score instruments
        $instru_res =0;
        if ($request->input('guitare') == "corde"){
            $instru_res+=30;
        }
        if ($request->input('flute') == "vent"){
            $instru_res+=30;
        }
         if ($request->input('piano') == "corde"){
            $instru_res+=40;
        }
        //récupération score instruments
        $hist_res =0;
        if ($request->input('mozart') == "requiem"){
            $hist_res+=40;
        }
        if ($request->input('beethovven') == "lettre"){
            $hist_res+=30;
        }
         if ($request->input('patrick') == "bruel"){
            $hist_res+=30;
        }
        $connai->solfege_moyen     = $solfege_res;
        $connai->instruments_moyen    = $instru_res;
        $connai->histoire_moyen = $hist_res;

        $connai->user_id=Auth::user()->id;

        $connai->save();

        return redirect('/');//view;
    }

}
