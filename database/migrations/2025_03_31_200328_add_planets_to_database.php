<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddPlanetsToDatabase extends Migration
{
    public function up()
    {
        // Insert planets for TRAPPIST-1
        DB::table('planets')->insert([
            [
                'name' => 'TRAPPIST-1b',
                'solar_system_id' => 2,  // Solar System ID for TRAPPIST-1
                'size_in_km' => 12700,
                'description' => 'A rocky planet about 1.1 times the size of Earth.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TRAPPIST-1c',
                'solar_system_id' => 2,  // Solar System ID for TRAPPIST-1
                'size_in_km' => 12100,
                'description' => 'A planet in the habitable zone, potentially capable of supporting life.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TRAPPIST-1d',
                'solar_system_id' => 2,  // Solar System ID for TRAPPIST-1
                'size_in_km' => 11000,
                'description' => 'Another rocky planet in the habitable zone.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert planets for Kepler-90
        DB::table('planets')->insert([
            [
                'name' => 'Kepler-90b',
                'solar_system_id' => 3,  // Solar System ID for Kepler-90
                'size_in_km' => 13200,
                'description' => 'A gas giant, similar to Neptune.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kepler-90c',
                'solar_system_id' => 3,  // Solar System ID for Kepler-90
                'size_in_km' => 11300,
                'description' => 'A rocky planet similar to Venus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kepler-90d',
                'solar_system_id' => 3,  // Solar System ID for Kepler-90
                'size_in_km' => 9500,
                'description' => 'A small rocky planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert planets for Proxima Centauri
        DB::table('planets')->insert([
            [
                'name' => 'Proxima Centauri b',
                'solar_system_id' => 4,  // Solar System ID for Proxima Centauri
                'size_in_km' => 12000,
                'description' => 'A potentially habitable planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Proxima Centauri c',
                'solar_system_id' => 4,  // Solar System ID for Proxima Centauri
                'size_in_km' => 10800,
                'description' => 'A rocky planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Proxima Centauri d',
                'solar_system_id' => 4,  // Solar System ID for Proxima Centauri
                'size_in_km' => 8500,
                'description' => 'A smaller rocky planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert planets for Gliese 581
        DB::table('planets')->insert([
            [
                'name' => 'Gliese 581g',
                'solar_system_id' => 5,  // Solar System ID for Gliese 581
                'size_in_km' => 10200,
                'description' => 'A planet in the habitable zone.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gliese 581d',
                'solar_system_id' => 5,  // Solar System ID for Gliese 581
                'size_in_km' => 11500,
                'description' => 'A super-Earth planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gliese 581e',
                'solar_system_id' => 5,  // Solar System ID for Gliese 581
                'size_in_km' => 9500,
                'description' => 'A rocky planet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        // If you need to roll back this migration, remove the planets
        DB::table('planets')->whereIn('name', [
            'TRAPPIST-1b', 'TRAPPIST-1c', 'TRAPPIST-1d',
            'Kepler-90b', 'Kepler-90c', 'Kepler-90d',
            'Proxima Centauri b', 'Proxima Centauri c', 'Proxima Centauri d',
            'Gliese 581g', 'Gliese 581d', 'Gliese 581e',
        ])->delete();
    }
}
