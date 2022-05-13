<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function books()
    {
        return view('books');
    }
    function login()
    {
        return view('login');
    }
}
