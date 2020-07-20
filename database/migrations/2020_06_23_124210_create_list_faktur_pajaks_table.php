<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListFakturPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_faktur_pajaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nofakturpajak');
            $table->date('tanggalfakturpajak');
            $table->text('nokwitansi');
            $table->text('noinvoice');
            $table->text('perihal');
            $table->text('instansirekanan');
            $table->text('npwp');
            $table->text('bulanpajak');
            $table->text('nominalhpp');
            $table->text('nominalppn');
            $table->text('keterangan');
            $table->text('statusfakturpajak');
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
        Schema::dropIfExists('list_faktur_pajaks');
    }
}
