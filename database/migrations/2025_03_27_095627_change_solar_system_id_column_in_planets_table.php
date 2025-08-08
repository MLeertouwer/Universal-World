<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->bigInteger('solar_system_id')->unsigned()->change(); // Changes the column to BIGINT UNSIGNED
        });
    }

    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->integer('solar_system_id')->change(); // Rollback the change
        });
    }
};
