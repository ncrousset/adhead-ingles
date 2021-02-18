<?php

namespace Tests\Unit;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GenderTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function a_gender_has_some_videos()
    {
        $gender = Gender::factory()->hasVideos(5)->create();

        $this->assertInstanceOf(Collection::class, $gender->videos);
        $this->assertEquals(5, $gender->videos->count());
    }

    /** @test */
    public function is_has_a_path()
    {
        $gender = Gender::factory()->create();
        $this->assertEquals('/genders/' . $gender->id, $gender->path());
    }
}
