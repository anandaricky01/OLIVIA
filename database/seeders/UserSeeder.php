<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'name' => $faker->name(),
                'role_id' => mt_rand(1,2),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'poin_id' => $i,
                'alamat' => $faker->address()
    		]);
 
    	}
    }
}
