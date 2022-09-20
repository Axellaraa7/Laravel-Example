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
        Schema::create('classes_ex1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ex1_id');
            $table->unsignedBigInteger('class_id');
            $table->foreign('ex1_id')->references('id')->on('ex1');
            $table->foreign('classes_id')->references('id')->on('classes');
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
        Schema::dropIfExists('classes_ex1');
    }
};
