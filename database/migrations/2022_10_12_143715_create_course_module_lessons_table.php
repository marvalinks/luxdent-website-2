<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_module_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('lessonid');
            $table->string('moduleid');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('notes_url')->nullable();
            $table->integer('duration')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_module_lessons');
    }
};
