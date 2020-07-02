<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTagihanProdukLayanan extends Model
{
    protected $table="list_tagihan_produk_layanans";
    protected $fillable = ['instansirekanan','bulantagihan','tanggaltagihan','nominalhpp','ppn','tanggaljatuhtempo','dokumenpelengkap','keterangan','statusdokument','statustagihan'];
    
}
