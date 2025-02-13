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
            'title' => 'UPTD Puskesmas Pasirjati dengan Layanan ILP',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'uptd-puskesmas-pasirjati-dengan-layanan-ilp',
            'body' => 'UPTD Puskesmas Pasirjati adalah fasilitas kesehatan yang terletak di Kota Bandung, menyediakan layanan kesehatan yang terintegrasi melalui Program INTEGRASI LAYANAN PRIMER. Puskesmas ini memberikan pelayanan kesehatan menyeluruh, mulai dari pemeriksaan umum, imunisasi, hingga pelayanan ibu dan anak. Dengan konsep integrasi, setiap layanan dirancang untuk meningkatkan kualitas hidup masyarakat, memastikan akses kesehatan yang lebih mudah dan cepat. Puskesmas Pasirjati juga berkomitmen untuk menciptakan lingkungan sehat dan mendukung program pemerintah dalam meningkatkan kesejahteraan masyarakat. Melalui inovasi dan teknologi, UPTD Puskesmas Pasirjati menjadi pusat kesehatan yang responsif dan efisien untuk masyarakat Kota Bandung.'
        ]);
        
        Post::create([
            'title' => 'Yuk jaga kesehatan selama pemilu dengan 4 C',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'Yuk-jaga-kesehatan-selama-pemilu-dengan-4-C',
            'body' => 'Selama pemilu, menjaga kesehatan sangat penting agar tubuh tetap bugar dan siap menjalani aktivitas. Terapkan 4 C untuk tetap sehat: Cegah penyebaran penyakit dengan mencuci tangan dan memakai masker. Cerdas dalam memilih pola hidup sehat, seperti makan bergizi dan cukup tidur. Cinta diri dengan menjaga kesehatan mental, hindari stres berlebihan selama proses pemilu. Terakhir, Cek Kesehatan secara rutin, terutama tekanan darah dan kadar gula, untuk memastikan kondisi tubuh tetap optimal. Dengan 4 C ini, kita dapat berpartisipasi dalam pemilu dengan sehat dan penuh energi, menjaga tubuh agar tetap prima selama periode penting ini.'
        ]);

        Post::create([
            'title' => 'Waspada! Deman Berdarah Saat Musim Hujan',
            'author_id' => 1,
            'category_id' => 2,
            'slug' => 'waspada-demam-berdarah-saat-musim-hujan',
            'body' => 'Penyakit Demam Berdarah Dengue (DBD) erat kaitannya dengan musim hujan. Hal ini karena musim hujan dapat menyebabkan genangan air yang menjadi tempat berkembang biaknya nyamuk Aedes aegypti, penyebab DBD. Lalu, bagaimana kondisi kasus DBD di Kota Bandung? Simak selengkapnya dalam postingan berikut! #DBD #demamberdarah #kotabandung #kesehatan'
        ]);

        Post::create([
            'title' => 'Paket Pemeriksaan Kesehatan Gratis',
            'author_id' => 1,
            'category_id' => 2,
            'slug' => 'paket-pemeriksaan-kesehatan-gratis',
            'body' => '#Healthies, ada paket spesial! Tapi bukan paket belanjaan, ya. Ini paket cek kesehatan gratis dari negara, sebagai kado ulang tahun kamu Paketnya bervariasi, Iho! Isinya disesuaikan dengan usia kamu. Kira-kira, paket apa yang bakal kamu terima? Program #CekKesehatanGRATIS sebagai hadiah ulang tahun dari Negara untuk seluruh masyarakat Indonesia, sudah bisa di akses di UPTD Puskesmas Neglasari. Mulai dari bayi baru lahir, balita, dewasa sampai lansia berhak mendapatkan berbagai macam jenis pemeriksaan kesehatan. Jangan sampai kelewatan kesempatan cek kesehatan secara GRATIS! Yuk, unduh SATUSEHAT Mobile #CekKesehatanGratis *Paket Pemeriksaan disesuaikan dengan ketersediaan di Puskesmas'
        ]);
        
        
    }
}
