<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class HomeController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('home',['exercises' => $exercises]);
    }
}
