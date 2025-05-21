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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('nip', 20)->unique();
            $table->string('golongan', 50)->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->date('tmt_jabatan')->nullable();
            $table->date('tmt_cpns')->nullable();
            $table->date('tmt_pns_pppk')->nullable();
            $table->string('pendidikan', 100)->nullable();
            $table->integer('tahun_lulus')->nullable();
            $table->date('tmt_mutasi')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->unsignedInteger('umur')->nullable();
            $table->enum('status_perkawinan', ['Menikah', 'Belum Menikah'])->nullable();
            $table->string('photo_url', 255)->nullable(); // Added picture field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};