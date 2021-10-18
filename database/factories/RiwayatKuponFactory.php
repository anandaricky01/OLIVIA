<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\RiwayatKupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiwayatKuponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RiwayatKupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode' => Str::random(10),
            'kupon_id' => mt_rand(1,4),
            'user_id' => mt_rand(1,10)
        ];
    }
}
