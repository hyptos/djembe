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

        //récupération score instruments
        $instru_res =0;
        if ($request->input('guitare') == "corde"){
            $instru_res+=40;
        }
        if ($request->input('flute') == "vent"){
            $instru_res+=40;
        }
        if ($request->input('piano') == "corde"){
            $instru_res+=40;
        }
        $instru_res = $instru_res*100 / 40*3;

        $solfege_res = 0;
        if ($request->input('note1') == "re"){
            $solfege_res+=40;
        }
        if ($request->input('note2') == "1_2"){
            $solfege_res+=40;
        }
        $solfege_res = $solfege_res*100 / 40*2;

        //récupération score instruments
        $hist_res =0;
        if ($request->input('mozart') == "requiem"){
            $hist_res+=40;
        }
        if ($request->input('beethovven') == "lettre"){
            $hist_res+=40;
        }
        if ($request->input('patrick') == "bruel"){
            $hist_res+=40;
        }
        $hist_res = $hist_res*100 / 40*3;


        $connai->solfege_moyen     = $solfege_res;
        $connai->instruments_moyen    = $instru_res;
        $connai->histoire_moyen = $hist_res;

        if(Auth::check())
            $connai->user_id=Auth::user()->id;
        else
            return redirect('/login');

        $connai->save();

        return redirect('/');//view;
    }

}
