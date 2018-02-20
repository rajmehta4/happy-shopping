<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earphones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand')->unsigned();
            $table->foreign('brand')->references('id')->on('brands');
            $table->integer('driver_size');
            $table->integer('sensitivity');
            $table->integer('impedace');
            $table->string('waterproof');
            $table->string('m_photo_path');
            $table->timestamps();
        });

        Schema::create('e_more_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('earphones_id')->unsigned();
            $table->foreign('earphones_id')->references('id')->on('earphones');
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
        Schema::dropIfExists('earphones');
    }
}
