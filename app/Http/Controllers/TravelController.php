<?php

namespace App\Http\Controllers;

use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        dd('travels');
        return view('travels', compact('travels'));
    }
}
