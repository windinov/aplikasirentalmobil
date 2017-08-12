<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_sewa');
            $table->integer('jmlh_hari');
            $table->integer('konsumen_id')->unsigned();
            $table->integer('total_sewa');
            $table->foreign('konsumen_id')->references('id')->on('konsumens')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('mobil_id')->unsigned();
            $table->foreign('mobil_id')->references('id')->on('mobils')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('supir_id')->unsigned();
            $table->foreign('supir_id')->references('id')->on('supirs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sewas');
    }
}
