<?php

namespace Tests\Unit;

use App\Models\Expression;
use App\Models\Lyric;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExpressionTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function is_has_a_path()
    {
        $expression = Expression::factory()->create();
        $this->assertEquals("/lyrics/{$expression->lyric->id}/expression/{$expression->id}", $expression->path());
    }

    /** @test */
    public function a_exoression_has_a_lyric()
    {
        $expression = Expression::factory()->create();
        $this->assertInstanceOf(Lyric::class, $expression->lyric);
    }
}
