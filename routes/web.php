<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolarSystemController;

Route::get('/', [PlanetController::class, 'home'])->name('home');

Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');

Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('planets.show');

Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');

Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show'])->name('solarsystems.show');
