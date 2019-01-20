<?php

namespace App\Http\Controllers;

use \App\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    public function successLogin()
    {
        return view('successLogin');
    }

    public function successCreateUser()
    {
        return view('successCreateUser');
    }
}
