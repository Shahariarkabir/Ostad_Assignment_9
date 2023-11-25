<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function portfolio()
    {
        // return view('Layout.master');
        return view('app');
    }
}
