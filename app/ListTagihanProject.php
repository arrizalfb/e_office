<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTagihanProject extends Model
{
    protected $table="list_tagihan_projects";
    protected $fillable = ['instansirekanan','tanggaltagihan','nominalhpp','ppn','tanggaljatuhtempo','nominalppn','dokumentpelengkap','keterangan','statusdokument','statustagihan','keteranganstatus'];
}
