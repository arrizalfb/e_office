<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProdukLayanan extends Model
{
    protected $table="jenis_produk_layanans";
    protected $fillable = ['jenisproduklayanan','keterangan'];
}
