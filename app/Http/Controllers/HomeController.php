<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{

    public function dashboard()
    {


        return view('auth.login' );
    }
    public function register()
    {


        return view('auth.register' );
    }
    public function index()
    {

      return view('index');
    }
    public function logout()
    {

        session()->flush();
        Auth::logout();

        return redirect()->route('home');
    }



}