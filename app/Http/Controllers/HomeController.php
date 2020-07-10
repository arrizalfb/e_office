<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use App\ListSuratKeluar;
use App\JenisSuratKeluar;
use App\JenisProdukLayanan;
use App\ListSuratMasuk;
use App\ListFakturPajak;
use App\ListTagihanProdukLayanan;
use App\ListTagihanProject;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk menampilkan di dashboard

        $listsuratkeluar = ListSuratKeluar::all();
        $listsuratmasuk = ListSuratMasuk::all();
        $jenisproduklayanan = JenisProdukLayanan::all();
        $listtagihanproject = ListTagihanProject::all();


        //grafik1
        $jenissuratkeluar = JenisSuratKeluar::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
                ->groupBy('year', 'month')
                ->orderBy('year', 'desc')
                ->get();


        //grafik2        
        $listtagihanproduklayanan = ListTagihanProdukLayanan::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
                ->groupBy('year', 'month')
                ->orderBy('year', 'desc')
                ->get();


        //grafik3
        $listfakturpajak = ListFakturPajak::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
                           ->groupBy('year', 'month')
                           ->orderBy('year', 'desc')
                           ->get();


        return view ('page.home', compact('listsuratkeluar', 'listsuratmasuk','jenisproduklayanan','listtagihanproject','jenissuratkeluar','listtagihanproduklayanan','listfakturpajak'));
    }

    // public function grafik1(){
    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
    //     $datalisttagihanproduklayanan = ListTagihanProdukLayanan::select(DB::raw("COUNT(*) as count"))
    //                                     ->whereYear('created_at', date('Y'))
    //                                     ->groupBy(DB::raw("Month(created_at)"))
    //                                     ->pluck('count');

    //     return view ('page.grafiklisttagihanproduklayanan', compact('listTagihanProdukLayanan'));
    // }

    // public function grafik2(){
    //     $listfakturpajak = ListFakturPajak::all();
    //     $datalistfakturpajak = ListFakturPajak::select(DB::raw("COUNT(*) as count"))
    //                            ->whereYear('created_at', date('Y'))
    //                            ->groupBy(DB::raw("Month(created_at"))
    //                            ->pluck('count');

    //     return view ('page.grafiklistfakturpajak', compact('listfakturpajak'));
    // }

    // public function grafik3(){
    //      $jenissuratkeluar = JenisSuratKeluar::all();
    //     // Menghitung data berdasarkan bulan 
    //     $datajenissuratkeluar = JenisSuratKeluar::select(DB::raw("COUNT(*) as count"))
    //                             ->whereYear('created_at', date('Y'))
    //                             ->groupBy(DB::raw("Month(created_at)"))
    //                             ->pluck('count');

    //     return view ('page.grafikjenissuratkeluar', compact('datajenissuratkeluar'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
