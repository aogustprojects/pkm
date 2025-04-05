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
        Schema::create('poli_gigi_rujukan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_rm');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('alamat');
            $table->string('petugas_pel');
            $table->string('pemberi_info');
            $table->string('penerima_info');
            $table->string('diagnosis')->nullable();
            $table->string('nama_tujuan_tindakan')->nullable();
            $table->string('indikasi_tindakan')->nullable();
            $table->string('tata_cara')->nullable();
            $table->string('risiko_komplikasi')->nullable();
            $table->string('prognosis')->nullable();
            $table->string('alternatif_risiko')->nullable();
            $table->string('biaya_tindakan')->nullable();
            $table->text('signature1')->nullable();
            $table->text('signature2')->nullable();
            $table->string('jenis_kelamin');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('persetujuan_tindakan');
            $table->timestamps();
            $table->text('signature3')->nullable();
            $table->text('signature4')->nullable();
            $table->text('signature5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poli_gigi_rujukan');
    }
};
