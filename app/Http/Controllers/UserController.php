<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\User;
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
            // echo 'delete' . $key->name . ' <br>';
            $key->delete();
        }

        return 'Delete OK';
    }

    /**
     * Return the view signup
     *
     * @param  none
     * @return Response
    */
    public function signup()
    {
        return view('signup', []);
    }

    /**
     * Return the view login
     *
     * @param  none
     * @return Response
    */
    public function login()
    {
        if(Auth::check()){
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }

    /**
     * Return the view dashboard
     *
     * @param  none
     * @return Response
    */
    public function dashboard()
    {
        $cours = Cours::all();
        return view('dashboard',['cours' => $cours]);

    }


    /**
     * Return the view login
     *
     * @param  none
     * @return Response
    */
    public function loginAttempt(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password),true)) {
            return view('login', ['user' => Auth::user()]);
        }
        else {
            return redirect('dashboard');
        }
    }

    /**
     * logout the current user
     *
     * @param  none
     * @return Response
    */
    public function logout()
    {
        Auth::logout();
        Session::forget('user');
        return redirect('/');
    }

    /**
     * Add a new user.
     *
     * @param  none
     * @return Response
    */
    public function addUser(Request $request)
    {
        $user           = new User();
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = $request->input('password');
        $user->teach    = $request->input('teach');

        $user->save();

        return response()->json(['type' => 'success', 'message' => 'user created']);
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
        $u1 = User::find(1)->learnFrom();


        // $s2 = Stats::find(1);
        // $c2 = Cours::find(3);

        echo '<pre>';
        print_r($u1);
        echo '</pre>';
        return 'OK';
    }
}
