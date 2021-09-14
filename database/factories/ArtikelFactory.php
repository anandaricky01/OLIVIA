<?php

namespace Database\Factories;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtikelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artikel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(mt_rand(2,4)),
            'slug'=> $this->faker->sentence(mt_rand(3,5)),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(function($p){
                            return "<p>$p</p>";
                        })
                        ->implode(''),
            'category_id'=> mt_rand(1,5),
            'user_id'=> mt_rand(1,5)
        ];
    }
}
