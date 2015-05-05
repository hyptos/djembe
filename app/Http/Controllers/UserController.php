<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Learner;

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
     * Show the profile of all teachers.
     *
     * @param  none
     * @return Response
    */
    public function showProfileTeachers()
    {

        $teachers = Teacher::all();
        return view('teacherAll', ['teachers' => $teachers]);
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
        //creation d'un User
        $le = User::find(43);

        //creation d'un Teacher
        $te  = Learner::find(43);

        // link them together
        $te->user()->save($le);
        return 'OK';
    }
}
