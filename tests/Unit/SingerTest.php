<?php

namespace Tests\Unit;

use App\Models\Singer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SingerTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    public function a_singer_has_some_videos()
    {
        $singer = Singer::factory()->hasVideos(5)->create();

        $this->assertInstanceOf(Collection::class, $singer->videos);
        $this->assertEquals(5, $singer->videos->count());
    }


    /** @test */
    public function is_has_a_path()
    {
        $singer = Singer::factory()->create();
        $this->assertEquals('/singers/' . $singer->id, $singer->path());
    }

}
