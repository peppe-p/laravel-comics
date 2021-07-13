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

    public function comic($id)
    {
        $comics_data = config('comics');
        if (is_numeric($id) && $id < count($comics_data) && $id >= 0) {
            $comic = $comics_data[$id];
            return view('comic_details', compact('comic'));
        } else {
            abort(404);
        }
    }
}