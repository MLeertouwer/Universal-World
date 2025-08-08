<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    // Show all planets
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    // Show a specific planet by ID
    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return view('planets.show', compact('planet'));
    }

    public function home()
    {
        $planets = Planet::all();
        return view('welcome', compact('planets'));
    }
}
