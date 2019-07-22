<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
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
            $table->string('title4')->nullable();
            $table->string('deskripsi4')->nullable();
            $table->string('image4')->nullable();
            $table->string('title5')->nullable();
            $table->string('deskripsi5')->nullable();
            $table->string('image5')->nullable();
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
        Schema::dropIfExists('services');
    }
}
