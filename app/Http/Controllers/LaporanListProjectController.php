<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanListProjectController extends Controller
{
    public function index(){
        $laporanlistproject = DB::table('list_tagihan_projects')->get();
    return view('page.laporanlistproject',['laporanlistproject'=>$laporanlistproject]);
}
}
