<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenderVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender_video', function (Blueprint $table) {
            $table->primary(['video_id', 'gender_id']);

            $table->foreignId('video_id')->constrained('videos')->onDelete('cascade');
            $table->foreignId('gender_id')->constrained('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gender_video');
    }
}
