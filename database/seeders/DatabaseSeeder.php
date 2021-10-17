<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\JumlahPoin;
use App\Models\Kupon;
use App\Models\RiwayatKupon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(10)->create();
        Artikel::factory(50)->create();
        RiwayatKupon::factory(50)->create();
        JumlahPoin::factory(10)->create();

        Category::create([
            'name' => 'Fun Fact',
            'slug' => 'fun-fact'
        ]);

        Category::create([
            'name' => 'Tips',
            'slug' => 'tips'
        ]);

        Category::create([
            'name' => 'Inovasi',
            'slug' => 'inovasi'
        ]);

        Category::create([
            'name' => 'Aksi',
            'slug' => 'aksi'
        ]);
        
        Category::create([
            'name' => 'Kategori E',
            'slug' => 'kategori-e'
        ]);

        Role::create(['role_name' => 'penyetor']);

        Role::create(['role_name' => 'admin']);

        Kupon::create([
            'name' => "Kupon Diskon 1",
            'diskon' => "10%",
            'poin' => 100 
        ]);

        Kupon::create([
            'name' => "Kupon Diskon 2",
            'diskon' => "15%",
            'poin' => 150
         ]);

        Kupon::create([
            'name' => "Kupon Diskon 3",
            'diskon' => "20%",
            'poin' => 200  
        ]);

        Kupon::create([
            'name' => "Kupon Diskon 4",
            'diskon' => "25%",
            'poin' => 250  
        ]);
        
    }
}
