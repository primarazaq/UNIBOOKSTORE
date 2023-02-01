<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->string('id_buku')->primary();
            $table->string('kategori');
            $table->text('nama_buku');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('id_penerbit');
            $table->foreign('id_penerbit')->references('id_penerbit')->on('penerbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
