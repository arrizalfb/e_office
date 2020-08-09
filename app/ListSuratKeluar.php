<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListSuratKeluar extends Model
{
    protected $table="list_surat_keluars";
    protected $fillable = ['no_surat','jenissurat','perihal','tujuan','perusahaan','penanggungjawab','keterangan','statussuratkeluar','keteranganstatus'];
}
