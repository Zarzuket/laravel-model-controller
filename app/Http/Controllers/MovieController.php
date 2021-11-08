<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        // "id" => 1
        // "title" => "Il Padrino"
        // "original_title" => "The Godfather"
        // "nationality" => "american"
        // "date" => "1972-03-24"
        // "vote" => 9.2
        return view('home', compact("movies"));
    }
}
