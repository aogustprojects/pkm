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
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama
            $table->string('no_rm'); // No. RM
            $table->string('ttl_umur'); // TTL / Umur
            $table->string('alamat'); // Alamat
            $table->string('p_pelaksana'); // Petugas Pelaksana
            $table->string('pemberi_info'); // Pemberi Informasi
            $table->string('penerima_info'); // Penerima Informasi
            // Tindakan & Diagnosa
            $table->string('diagnosis')->nullable();
            $table->boolean('diagnosis_check')->default(false);

            $table->string('nama_tujuan_tindakan')->nullable();
            $table->boolean('nama_tujuan_tindakan_check')->default(false);

            $table->string('indikasi_tindakan')->nullable();
            $table->boolean('indikasi_tindakan_check')->default(false);

            $table->string('tata_cara')->nullable();
            $table->boolean('tata_cara_check')->default(false);

            $table->string('risiko_komplikasi')->nullable();
            $table->boolean('risiko_komplikasi_check')->default(false);

            $table->string('prognosis')->nullable();
            $table->boolean('prognosis_check')->default(false);

            $table->string('alternatif_risiko')->nullable();
            $table->boolean('alternatif_risiko_check')->default(false);

            $table->string('biaya_tindakan')->nullable();
            $table->boolean('biaya_tindakan_check')->default(false);
            $table->timestamps();

            $table->text('signature1')->nullable();
            $table->text('signature2')->nullable();
            $table->text('signature3')->nullable();
            $table->text('signature4')->nullable();
            $table->text('signature5')->nullable();

            $table->string('umur'); // Age
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Gender
            
            $table->enum('persetujuan_tindakan', ['menyetujui', 'menolak'])->nullable();

            $table->date('tanggal')->nullable(); // Store the selected date
            $table->time('jam')->nullable(); // Store the selected time


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rujukan');
    }
};
