<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
class HomeController extends Controller
{
    // single action controller
    public function __invoke()
    {
        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }
}
