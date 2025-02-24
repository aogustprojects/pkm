<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PoliGigi;

class PoliGigiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PoliGigi::create([
            'nama' => 'John Doe', // Combined first_name & last_name
            'nik' => '1234567890123456',
            'status_pasien' => 'baru', // Added status_pasien
            'jenis_kelamin' => 'Laki-Laki',
            'jenis_pasien' => 'BPJS',
            'no_bpjs' => '9876543210123',
            'alamat' => 'Jl. Contoh No. 123, Bandung'
        ]);

        PoliGigi::create([
            'nama' => 'Jane Doe', // Combined first_name & last_name
            'nik' => '6543210987654321',
            'status_pasien' => 'lama', // Added status_pasien
            'jenis_kelamin' => 'Perempuan',
            'jenis_pasien' => 'Umum',
            'no_bpjs' => null, // No BPJS since it's an Umum patient
            'alamat' => 'Jl. Coba No. 456, Jakarta'
        ]);
    }
}
