<?php

namespace Tests\Unit;

use App\Models\Lyric;
use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LyricTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function is_has_a_path()
    {
        $video = Video::factory()->create();
        $this->assertEquals("/videos/{$video->id}/lyrics/{$video->lyric->id}", $video->lyric->path());
    }

    /** @test */
    public function a_lyric_has_some_expresions()
    {
        $video = Video::factory()->create();
        $lyric = $video->lyric;

        $this->assertInstanceOf(Collection::class, $lyric->expressions);
    }

}
