<?php

namespace Tests\Feature;

use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageVideosTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function guests_cannot_manage_videos()
    {
        $this->get('/videos/create')->assertRedirect('login');
        $this->post('/videos', [])->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_create_a_video()
    {
        $this->signIn();

        $this->get('/videos/create')->assertOk();

        $attributes = [
            'title' => 'Post Malone - Circles',
            'id_youtube' => 'wXhTHyIgQ_U',
            'lyric' => $this->faker->text,
            'expressions' => [
                ['expression' => $this->faker->sentence, 'paragraph' => 1, 'order' => 1],
                ['expression' => $this->faker->sentence, 'paragraph' => 1, 'order' => 2],
                ['expression' => $this->faker->sentence, 'paragraph' => 1, 'order' => 3],
                ['expression' => $this->faker->sentence, 'paragraph' => 1, 'order' => 4],
                ['expression' => $this->faker->sentence, 'paragraph' => 1, 'order' => 5],
            ]
        ];

        $response = $this->post('/videos', $attributes);

        $video = Video::where(['title' => $attributes['title']])->first();

        $this->assertInstanceOf(Video::class, $video);

        $response->assertRedirect($video->path());
    }

}
