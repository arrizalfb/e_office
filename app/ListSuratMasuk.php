<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListSuratMasuk extends Model
{
    protected $table="list_surat_masuks";
    protected $fillable = ['no_surat','perihal','instansipengirim','Keterangan','statussuratmasuk','keterangansuratmasuk'];
}
