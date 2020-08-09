<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListFakturPajak extends Model
{
    protected $table="list_faktur_pajaks";
    protected $fillable = ['nofakturpajak','tanggalfakturpajak','nokwitansi','noinvoice','perihal','instansirekanan','npwp','bulanpajak','nominalhpp','nominalppn','keterangan','statusfakturpajak','keteranganlistpajak'];
}
