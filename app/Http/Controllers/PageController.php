<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Movie::all();
        return view('movies', compact('data'));
    }
}
