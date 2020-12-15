<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255);
            $table->string('foto_barang', 255);
            $table->decimal('harga_barang');
            $table->decimal('harga_beli');
            $table->decimal('harga_jual');
            $table->integer('stok');
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
        Schema::dropIfExists('m_produks');
    }
}
