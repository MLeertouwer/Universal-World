<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->foreign('solar_system_id')
                  ->references('id')
                  ->on('solar_systems')
                  ->onDelete('cascade'); // Cascade delete, adjust if needed
        });
    }

    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropForeign(['solar_system_id']); // Drop the foreign key
        });
    }
};
