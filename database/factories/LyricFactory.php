<?php

namespace Database\Factories;

use App\Models\Lyric;
use Illuminate\Database\Eloquent\Factories\Factory;

class LyricFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lyric::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lyric' => $this->faker->text
        ];
    }
}
