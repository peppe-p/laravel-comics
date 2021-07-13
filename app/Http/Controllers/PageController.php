<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function comics()
    {
        $comics_data = config('comics');
        return view('comics', compact('comics_data'));
    }
}