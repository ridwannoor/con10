<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->string('title1')->nullable();
            $table->string('deskripsi1')->nullable();
            $table->string('image1')->nullable();
            $table->string('title2')->nullable();
            $table->string('deskripsi2')->nullable();
            $table->string('image2')->nullable();
            $table->string('title3')->nullable();
            $table->string('deskripsi3')->nullable();
            $table->string('image3')->nullable();
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
        Schema::dropIfExists('features');
    }
}
