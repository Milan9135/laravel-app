<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index() {
        return view("pages/EersteQuery");
    }

    public function show($planet) {
        return view('pages/EersteQuery', [
            'planet' => $planet
        ]);
    }
}
