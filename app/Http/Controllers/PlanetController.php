<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index() {
        return view("pages/planets");
    }

    public function show($planet) {
        return view('pages/planets', [
            'planet' => $planet
        ]);
    }
}
