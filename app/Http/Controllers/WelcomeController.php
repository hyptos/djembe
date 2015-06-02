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
        return view('welcome', ['user' => Auth::user()]);
    }
}
