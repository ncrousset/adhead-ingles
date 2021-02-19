<?php

namespace Database\Factories;

use App\Models\Expression;
use App\Models\Lyric;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpressionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expression::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lyric_id' => Lyric::factory(),
            'expression' => $this->faker->sentence,
            'paragraph' => 1,
            'order' => 1
        ];
    }
}
