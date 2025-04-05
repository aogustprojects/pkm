<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArsipSuratKeluar>
 */
class ArsipSuratKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_surat' => $this->faker->date(),
            'nomor_surat' => strtoupper($this->faker->bothify('###/SMK/####')),
            'pengirim' => $this->faker->company(),
            'perihal' => $this->faker->sentence(4),
            'dikirim_kepada' => $this->faker->name(),
            'lampiran' => strtoupper($this->faker->randomElement(['LAMP-001', 'LAMP-002', 'LAMP-003'])),
            'keterangan' => $this->faker->randomElement(['biasa', 'segera']),
            'document_path' => $this->faker->randomElement([null, 'documents/sample.pdf']),
        ];
    }
}
