<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTagihanProdukLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_tagihan_produk_layanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('instansirekanan');
            $table->text('bulantagihan');
            $table->text('tanggaltagihan');
            $table->text('nominalhpp');
            $table->text('ppn');
            $table->text('tanggaljatuhtempo');
            $table->text('dokumenpelengkap');
            $table->text('keterangan');
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
        Schema::dropIfExists('list_tagihan_produk_layanans');
    }
}
