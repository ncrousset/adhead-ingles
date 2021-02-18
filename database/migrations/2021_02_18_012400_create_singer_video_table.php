<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingerVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singer_video', function (Blueprint $table) {

            $table->primary(['video_id', 'singer_id']);

            $table->foreignId('video_id')->constrained('videos')->onDelete('cascade');
            $table->foreignId('singer_id')->constrained('singers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singer_video');
    }
}
