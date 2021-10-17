<?php

namespace Database\Factories;

use App\Models\JumlahPoin;
use Illuminate\Database\Eloquent\Factories\Factory;

class JumlahPoinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JumlahPoin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poin' => mt_rand(90,300),
            'user_id' => mt_rand(1,10)
        ];
    }
}
