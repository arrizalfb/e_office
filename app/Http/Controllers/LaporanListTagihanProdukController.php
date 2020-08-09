<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanListTagihanProdukController extends Controller
{
    public function index(){
        $laporanlisttagihanproduk = DB::table('list_tagihan_produk_layanans')->get();
    return view('page.laporanlisttagihanproduk',['laporanlisttagihanproduk'=>$laporanlisttagihanproduk]);
}
}
