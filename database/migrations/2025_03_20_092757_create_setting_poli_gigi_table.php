<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('setting_poli_gigi', function (Blueprint $table) {
            $table->id();
            $table->integer('max_registrations')->default(8); // Default to 8
            $table->boolean('is_form_open');
            $table->timestamps();
        });

        // Insert default setting
        DB::table('setting_poli_gigi')->insert([
            'max_registrations' => 8,
            'is_form_open' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_poli_gigi');
    }
};
