<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index1() {
        return view("pages/Controller");
    }

    public function Migrations() {
        return view("pages/Migrations");
    }

    public function show($planet) {
        return view('pages/Controller', [
            'planet' => $planet
        ]);
    }
}
