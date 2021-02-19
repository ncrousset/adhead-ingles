<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expression extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lyric()
    {
        return $this->belongsTo(Lyric::class);
    }

    /**
     * @return string
     */
    public function path()
    {
        return "/lyrics/{$this->lyric->id}/expression/$this->id";
    }
}
