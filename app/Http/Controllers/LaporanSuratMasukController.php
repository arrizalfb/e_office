<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanSuratMasukController extends Controller
{
    public function index(){
        $laporanlistsuratmasuk = DB::table('list_surat_masuks')->get();
    return view('page.laporanlistsuratmasuk',['laporanlistsuratmasuk'=>$laporanlistsuratmasuk]);
}
}
