<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'UPTD Puskesmas Pasirjati dengan Layanan INTEGRASI LAYANAN PRIMER',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'UPTD-Puskesmas-Pasirjati-dengan-Layanan-INTEGRASI-LAYANAN-PRIMER',
            'body' => 'UPTD Puskesmas Pasirjati adalah fasilitas kesehatan yang terletak di Kota Bandung, menyediakan layanan kesehatan yang terintegrasi melalui Program INTEGRASI LAYANAN PRIMER. Puskesmas ini memberikan pelayanan kesehatan menyeluruh, mulai dari pemeriksaan umum, imunisasi, hingga pelayanan ibu dan anak. Dengan konsep integrasi, setiap layanan dirancang untuk meningkatkan kualitas hidup masyarakat, memastikan akses kesehatan yang lebih mudah dan cepat. Puskesmas Pasirjati juga berkomitmen untuk menciptakan lingkungan sehat dan mendukung program pemerintah dalam meningkatkan kesejahteraan masyarakat. Melalui inovasi dan teknologi, UPTD Puskesmas Pasirjati menjadi pusat kesehatan yang responsif dan efisien untuk masyarakat Kota Bandung.'
        ]);
        
        Post::create([
            'title' => 'Yuk jaga kesehatan selama pemilu dengan 4 C',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'Yuk-jaga-kesehatan-selama-pemilu-dengan-4-C',
            'body' => 'Selama pemilu, menjaga kesehatan sangat penting agar tubuh tetap bugar dan siap menjalani aktivitas. Terapkan 4 C untuk tetap sehat: Cegah penyebaran penyakit dengan mencuci tangan dan memakai masker. Cerdas dalam memilih pola hidup sehat, seperti makan bergizi dan cukup tidur. Cinta diri dengan menjaga kesehatan mental, hindari stres berlebihan selama proses pemilu. Terakhir, Cek Kesehatan secara rutin, terutama tekanan darah dan kadar gula, untuk memastikan kondisi tubuh tetap optimal. Dengan 4 C ini, kita dapat berpartisipasi dalam pemilu dengan sehat dan penuh energi, menjaga tubuh agar tetap prima selama periode penting ini.'
        ]);
        
        
    }
}
