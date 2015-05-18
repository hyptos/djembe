<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Learner;
use App\Models\Teacher;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = User::find($id);
        return view('user', ['user' => $user]);
    }

    /**
     * Show the profile of all users.
     *
     * @param  none
     * @return Response
    */
    public function getAllProfile()
    {
        $users = User::all();
        return view('userAll', ['users' => $users]);
    }


    /**
     * Delete all the profile of all users.
     *
     * @param  none
     * @return Response
    */
    public function deleteAllUsers()
    {
        $users = User::all();

        foreach ($users as $key) {
            echo 'delete' . $key->name . ' <br>';
            $key->delete();
        }

        return 'Delete OK';
    }

    /**
     * test fonction.
     *
     * @param  none
     * @return Response
    */
    public function test()
    {

        $learner = User::find(1);
        $teacher = User::find(3);

        $learner->learnFrom()->save($teacher);
        return 'OK';
    }
}
