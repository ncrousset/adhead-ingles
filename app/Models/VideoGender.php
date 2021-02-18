<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class VideoGender extends Pivot
{
    protected $table = "video_gender";
}
