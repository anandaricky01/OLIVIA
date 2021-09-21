<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Category;
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

        Category::create([
            'name' => 'Reboisasi',
            'slug' => 'reboisasi'
        ]);

        Category::create([
            'name' => 'Daur Ulang',
            'slug' => 'daur-ulang'
        ]);

        Category::create([
            'name' => 'Gotong Royong',
            'slug' => 'gotong-royong'
        ]);

        Category::create([
            'name' => 'Tips dan trik kebersihan',
            'slug' => 'tips-dan-trik-kebersihan'
        ]);
        
        Category::create([
            'name' => 'Bencana Alam',
            'slug' => 'bencana-alam'
        ]);

        Role::create(['role_name' => 'penyetor']);

        Role::create(['role_name' => 'kurir']);

        Role::create(['role_name' => 'kolega']);

        Role::create(['role_name' => 'admin']);
        
    }
}
