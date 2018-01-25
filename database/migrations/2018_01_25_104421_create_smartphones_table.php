<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('product_types');
            $table->timestamps();
        });

        Schema::create('smartphones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand')->unsigned();
            $table->foreign('brand')->references('id')->on('brands');
            $table->integer('ram');
            $table->integer('in_storage');
            $table->integer('f_camera');
            $table->integer('r_camera');
            $table->string('processor');
            $table->string('m_photo_path');
            $table->timestamps();
        });

        Schema::create('s_more_mages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('smartphone_id')->unsigned();
            $table->foreign('smartphone_id')->references('id')->on('smartphones');
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
        Schema::dropIfExists('smartphones');
    }
}
