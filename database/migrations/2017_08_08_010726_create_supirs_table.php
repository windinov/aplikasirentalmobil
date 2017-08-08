<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('nama');
            $table->string('jk');
            $table->string('no_identitas');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('harga_sewa');
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
        Schema::dropIfExists('supirs');
    }
}
