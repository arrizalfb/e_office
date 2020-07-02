<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSuratKeluar extends Model
{
    protected $table="jenis_surat_keluars";
    protected $fillable = ['noromawijenissurat','jenissurat','inisialjenissurat','keterangan','statussurat'];
}
