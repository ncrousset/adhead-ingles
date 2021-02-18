<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genders()
    {
        return $this->belongsToMany(Gender::class)
            ->using(VideoGender::class);
    }

    /** @test */
    public function singers()
    {
        return $this->belongsToMany(Singer::class)
            ->using(VideoSinger::class);
    }

    /**
     * @return string
     */
    public function path()
    {
        return "/videos/{$this->id}";
    }
}
