<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'size_in_km'];

    // Define the relationship with the SolarSystem model
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }

}
