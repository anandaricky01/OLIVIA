<?php

namespace Database\Seeders;

use App\Models\JumlahPoin;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JumlahPoinSeeder extends Seeder
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
    		DB::table('jumlah_poins')->insert([
    			'user_id' => $i,
                'poin' => mt_rand(100, 500)
    		]);
 
    	}
    }
}
