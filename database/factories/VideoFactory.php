<?php

namespace Database\Factories;

use App\Models\Expression;
use App\Models\Lyric;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'id_youtube' => 'NaTGwlfRB_c',
            'lyric_id' => Lyric::factory()->has(Expression::factory()->count(2))
        ];
    }
}
