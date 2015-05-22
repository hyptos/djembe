<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Session;

class WelcomeController extends Controller {
    /**
     * test fonction.
     *
     * @param  none
     * @return Response
    */
    public function test()
    {
        if(Auth::check()){
            return 'wesh ma gueule' .  Auth::user()->email;
        } else {
            return view('welcome', ['user' => Auth::user()]);
        }
    }
}
