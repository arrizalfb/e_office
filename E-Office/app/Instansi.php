<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table="instansi";
    protected $fillable = ['instansi_rekanan','alamat','npwp','contact_person'];
}
