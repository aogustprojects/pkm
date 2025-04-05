<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\PoliGigi;
use Illuminate\Support\Str;
use App\Models\ArsipSuratMasuk;
use Illuminate\Database\Seeder;
use App\Models\ArsipSuratKeluar;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class, PostSeeder::class]);
        Category::all();
        User::all();
        ArsipSuratMasuk::factory()->count(10)->create();
        ArsipSuratKeluar::factory()->count(10)->create();
        // Post::all();

        // Post::factory(10)->recycle([
        // ])->create();

        
    }
}
