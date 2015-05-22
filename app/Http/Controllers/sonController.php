<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class sonController extends Controller {
    /**
     * test fonction.
     *
     * @param  none
     * @return Response
    */
    public function test()
    {
        return view('testson', []);;
    }
}
