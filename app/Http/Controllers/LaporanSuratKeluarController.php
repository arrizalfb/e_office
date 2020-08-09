<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanSuratKeluarController extends Controller
{
    public function index(){
        $laporanlistsuratkeluar = DB::table('list_surat_keluars')->get();
    return view('page.laporanlistsuratkeluar',['laporanlistsuratkeluar'=>$laporanlistsuratkeluar]);
}
}
