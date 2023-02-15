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
        Schema::create('ask_questions', function (Blueprint $table) {
            $table->id();
            $table->string('courseid')->nullable();
            $table->string('moduleid')->nullable();
            $table->string('lessonid')->nullable();
            $table->string('userid')->nullable();
            $table->string('question');
            $table->string('slug')->nullable();
            $table->text('answer')->nullable();
            $table->string('keywords')->nullable();
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
        Schema::dropIfExists('ask_questions');
    }
};
