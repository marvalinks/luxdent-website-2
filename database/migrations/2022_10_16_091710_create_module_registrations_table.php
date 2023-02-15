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
        Schema::create('module_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('bundleid');
            $table->string('courseid');
            $table->string('moduleid');
            $table->string('userid');
            $table->float('amount_paid')->default(0);
            $table->string('reference')->nullable();
            $table->boolean('verified')->default(0);
            $table->date('verified_date')->nullable();
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
        Schema::dropIfExists('module_registrations');
    }
};
