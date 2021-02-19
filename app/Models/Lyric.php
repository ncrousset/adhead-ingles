<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expressions()
    {
        return $this->hasMany(Expression::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->hasOne(Video::class);
    }

    /**
     * @return string
     */
    public function path()
    {
        return "/videos/{$this->video->id}/lyrics/{$this->id}";
    }
}
