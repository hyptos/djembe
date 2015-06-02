<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExoTest2Controller extends Controller {
    /**
     * test fonction.
     *
     * @param  none
     * @return Response
    */
    public function test()
    {
        return view('exoTest2', []);;
    }
}
