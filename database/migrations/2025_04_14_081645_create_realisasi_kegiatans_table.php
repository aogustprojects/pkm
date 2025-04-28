<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('realisasi_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatan_id')->constrained('kegiatans')->onDelete('cascade');
            $table->year('tahun')->nullable();
            $table->integer('target')->default(0)->nullable();
            $table->integer('realisasi')->default(0)->nullable();
            $table->decimal('persentase', 5, 2)->default(0.00)->nullable();
            $table->json('goals')->nullable();
            $table->json('target_bulanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisasi_kegiatans');
    }
};