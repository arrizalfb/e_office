<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanListFakturPajakController extends Controller
{
    public function index(){
        $laporanlistfakturpajak = DB::table('list_faktur_pajaks')->get();
    return view('page.laporanlistfakturpajak',['laporanlistfakturpajak'=>$laporanlistfakturpajak]);
}
}
