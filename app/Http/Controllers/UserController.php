<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Stats;
use App\Models\Cours;

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
     * enseigne fonction.
     *
     * @param  User u1, User u2
     * @return Response
    */
    public function enseigne(User $u1, User $u2)
    {
        $u1->learnFrom()->save($u2);
        return 'OK';
    }

    /**
     * test fonction.
     *
     * @param  User u1, User u2
     * @return Response
    */
    public function test()
    {
        $u1 = User::find(1);
        $s2 = Stats::find(1);
        $c2 = Cours::find(3);

        echo 'wesh';
        $s2->cours()->save($c2);
        echo 'wesh';
        $s2->users()->save($u1);
        return 'OK';
    }
}
