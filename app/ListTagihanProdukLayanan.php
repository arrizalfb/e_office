<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTagihanProdukLayanan extends Model
{
    protected $table="list_tagihan_produk_layanans";
    protected $fillable = ['instansirekanan','tanggaltagihan','hpp','ppn','jatuhtempo','dokumenpelengkap','keterangan','statusdokument','statustagihan'];
    
}
