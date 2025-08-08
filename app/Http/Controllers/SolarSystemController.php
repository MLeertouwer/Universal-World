<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;
use App\Models\Planet;

class SolarSystemController extends Controller
{
    // Show all solar systems
    public function index()
    {
        $solarSystems = SolarSystem::all();
        $solarSystems = SolarSystem::withCount('planets')->get();
        return view('solarsystems.index', compact('solarSystems'));
    }

    // Show a specific solar system and its planets
    public function show($id)
    {
        $solarSystem = SolarSystem::with('planets')->findOrFail($id);

        return view('solarsystems.show', compact('solarSystem'));
    }
}
