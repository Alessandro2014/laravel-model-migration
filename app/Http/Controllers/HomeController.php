<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('home', compact('travels'));
    }
}
