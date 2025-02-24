<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('poli_gigi', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Combined first_name & last_name
            $table->string('nik', 16);
            $table->enum('status_pasien', ['baru', 'lama']); // Added status_pasien
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('jenis_pasien', ['BPJS', 'Umum']);
            $table->string('no_bpjs', 13)->nullable();
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poli_gigi');
    }
};
