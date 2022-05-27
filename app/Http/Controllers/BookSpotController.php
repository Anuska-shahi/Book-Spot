<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookSpotController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
 
    function login()
    {
        return view('login');
    }
}
