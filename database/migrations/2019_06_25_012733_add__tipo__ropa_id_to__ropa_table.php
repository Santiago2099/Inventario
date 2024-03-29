<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoRopaIdToRopaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ropas', function (Blueprint $table) {
            $table->integer('tipo_ropa_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_ropa', function (Blueprint $table) {
            $table->integer('tipo_ropa_id')->unsigned();
        });
    }
}
