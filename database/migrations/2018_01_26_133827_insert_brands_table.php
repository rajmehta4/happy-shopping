<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        DB::table('brands')->insert(
            [
                'name' => 'Apple',
                'type_id' => 1
            ],

            [
                'name' => 'Mi',
                'type_id' => 1
            ],

            [
                'name' => 'OnePlus',
                'type_id' => 1
            ],

            [
                'name' => 'Motorola',
                'type_id' => 1
            ],

            [
                'name' => 'Samsung',
                'type_id' => 1
            ]
        );*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
