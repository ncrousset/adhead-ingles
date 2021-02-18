<?php

namespace Tests\Unit;

use App\Models\Singer;
use App\Models\User;
use App\Models\Video\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = Singer::factory()->create();

        dd($user);

        $this->assertTrue(true);
    }
}
