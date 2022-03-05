<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    // rotta che rimanda a comics
    public function index() {
        $data = config('comics');
        return view('comics', compact('data'));
    }
};
// /rotta che rimanda a comics -> http://127.0.0.1:8000/comics

