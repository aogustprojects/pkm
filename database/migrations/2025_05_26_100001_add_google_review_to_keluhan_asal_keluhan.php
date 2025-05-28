<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create a new temporary table
        Schema::create('keluhans_temp', function (Blueprint $table) {
            $table->id();
            $table->string('asal_keluhan');
            $table->string('nama_pengirim');
            $table->string('email_pengirim')->nullable();
            $table->string('perihal');
            $table->text('isi_pesan');
            $table->timestamps();
        });

        // Copy data from the old table to the new table
        DB::statement('INSERT INTO keluhans_temp SELECT * FROM keluhans');

        // Drop the old table
        Schema::drop('keluhans');

        // Create the new table with updated enum
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->string('asal_keluhan')->check('asal_keluhan IN ("whatsapp", "instagram", "email", "google_review")');
            $table->string('nama_pengirim');
            $table->string('email_pengirim')->nullable();
            $table->string('perihal');
            $table->text('isi_pesan');
            $table->timestamps();
        });

        // Copy data back to the new table
        DB::statement('INSERT INTO keluhans SELECT * FROM keluhans_temp');

        // Drop the temporary table
        Schema::drop('keluhans_temp');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Create a new temporary table
        Schema::create('keluhans_temp', function (Blueprint $table) {
            $table->id();
            $table->string('asal_keluhan');
            $table->string('nama_pengirim');
            $table->string('email_pengirim')->nullable();
            $table->string('perihal');
            $table->text('isi_pesan');
            $table->timestamps();
        });

        // Copy data from the old table to the new table
        DB::statement('INSERT INTO keluhans_temp SELECT * FROM keluhans');

        // Drop the old table
        Schema::drop('keluhans');

        // Create the new table with original enum
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->string('asal_keluhan')->check('asal_keluhan IN ("whatsapp", "instagram", "email")');
            $table->string('nama_pengirim');
            $table->string('email_pengirim')->nullable();
            $table->string('perihal');
            $table->text('isi_pesan');
            $table->timestamps();
        });

        // Copy data back to the new table, excluding google_review entries
        DB::statement('INSERT INTO keluhans SELECT * FROM keluhans_temp WHERE asal_keluhan != "google_review"');

        // Drop the temporary table
        Schema::drop('keluhans_temp');
    }
}; 