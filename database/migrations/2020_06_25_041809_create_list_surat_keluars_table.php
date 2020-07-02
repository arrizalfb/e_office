<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_surat_keluars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('no_surat');
            $table->text('jenissurat');
            $table->text('perihal');
            $table->text('tujuan');
            $table->text('perusahaan');
            $table->text('penanggungjawab');
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
        Schema::dropIfExists('list_surat_keluars');
    }
}
