<?php

namespace Tests\Unit;

use App\Models\Lyric;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Video;


class VideoTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_video_has_a_lyric()
    {
        $video = Video::factory()->create();

        $this->assertInstanceOf(Lyric::class, $video->lyric);
    }

    /** @test */
    public function a_video_has_some_genders()
    {
        $video = Video::factory()->hasGenders(5)->create();

        $this->assertInstanceOf(Collection::class, $video->genders);
        $this->assertEquals(5, $video->genders->count());
    }

    /** @test */
    public function a_video_has_some_singers()
    {

        $video = Video::factory()->hasSingers(5)->create();

        $this->assertInstanceOf(Collection::class, $video->singers);
        $this->assertEquals(5, $video->singers->count());
    }

    /** @test */
    public function is_has_a_path()
    {
        $video = Video::factory()->create();
        $this->assertEquals('/videos/' . $video->id, $video->path());
    }
}
