<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenPlatillos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_platillo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();   
        });
        Schema::table('orden_platillo', function (Blueprint $table) {
            $table->integer('id_orden')->unsigned();
            $table->foreign('id_orden')->references('id')->on('orden');
            $table->integer('id_platillo')->unsigned();
            $table->foreign('id_platillo')->references('id')->on('platillo');
        });
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
