<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Puskesmas Pasirjati',
            'slug' => 'pkm-psj'
        ]);

        Category::create([
            'name' => 'Dinas Kesehatan Kota Bandung',
            'slug' => 'dinkes'
        ]);
        
        // Category::factory(3)->create();
    }
}
