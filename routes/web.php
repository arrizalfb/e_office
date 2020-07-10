<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//root untuk login
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 

//root untuk registration
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 

//root untuk dashboard
Route::get('/dashboard', 'AuthController@dashboard'); /*
Route::get('/dashboard', function () {
    return view('page.home');
})->name('/dashboard');*/

//root untuk user profile
Route::get('/profile', function () {
    return view('page.profile');
})->name('profile');

//root untuk logout
Route::get('logout', 'AuthController@logout')->name('logout');

//root untuk crud intansirekanan
Route::get('/instansi', 'InstansiController@index');
Route::get('/instansi/create', 'InstansiController@create');
Route::post('/instansi/save', 'InstansiController@save');

Route::get('/dashboard', 'HomeController@index');

//untuk membuat nomor surat otomatis
/*Route::get('otomatis', function(){
    $Awal = 'JRD';
    $bulanRomawi  = array("","I","II","III","IV","V","VI","VII","IX","X","XI");
    $noUrutAkhir = \App\Http\jenis_surat_keluars


}*/

//bagian dari surat keluar
    //root untuk crud jenissuratkeluar
    Route::get('/jenissuratkeluar', 'JenisSuratKeluarController@index');
    Route::get('/jenissuratkeluar/create', 'JenisSuratKeluarController@create');
    Route::post('/jenissuratkeluar/save', 'JenisSuratKeluarController@store');
    Route::get('/jenissuratkeluar/edit/{id}', 'JenisSuratKeluarController@edit');
    Route::put('/jenissuratkeluar/update/{id}', 'JenisSuratKeluarController@update');
    Route::get('/jenissuratkeluar/delete/{id}', 'JenisSuratKeluarController@destroy');

    //root untuk crud listsuratkeluar
    Route::get('/listsuratkeluar', 'ListSuratKeluarController@index');
    Route::get('/listsuratkeluar/create', 'ListSuratKeluarController@create');
    Route::post('/listsuratkeluar/save', 'ListSuratKeluarController@store');
    Route::get('/listsuratkeluar/edit/{id}', 'ListSuratKeluarController@edit');
    Route::get('/listsuratkeluar/view/{id}', 'ListSuratKeluarController@show');
    Route::put('/listsuratkeluar/update/{id}', 'ListSuratKeluarController@update');
    Route::get('/listsuratkeluar/delete/{id}', 'ListSuratKeluarController@destroy');
//bagian dari surat keluar

//bagian dari surat masuk
    //root untuk crud listsuratmasuk
    Route::get('/listsuratmasuk', 'ListSuratMasukController@index');
    Route::get('/listsuratmasuk/create', 'ListSuratMasukController@create');
    Route::post('/listsuratmasuk/save', 'ListSuratMasukController@store');
    Route::get('/listsuratmasuk/edit/{id}', 'ListSuratMasukController@edit');
    Route::get('/listsuratmasuk/view/{id}', 'ListSuratMasukController@show');
    Route::put('/listsuratmasuk/update/{id}', 'ListSuratMasukController@update');
    Route::get('/listsuratmasuk/delete/{id}', 'ListSuratMasukController@destroy');
//bagian dari surat masuk

//bagian dari produklayanan
    //root untuk crud jenisproduk/layanan
    Route::get('/jenisproduklayanan', 'JenisProdukLayananController@index');
    Route::get('/jenisproduklayanan/create', 'JenisProdukLayananController@create');
    Route::post('/jenisproduklayanan/save', 'JenisProdukLayananController@store');
    Route::get('/jenisproduklayanan/edit/{id}', 'JenisProdukLayananController@edit');
    Route::get('/jenisproduklayanan/view/{id}', 'JenisProdukLayananController@show');
    Route::put('/jenisproduklayanan/update/{id}', 'JenisProdukLayananController@update');
    Route::get('/jenisproduklayanan/delete/{id}', 'JenisProdukLayananController@destroy');

    //root untuk crud listtagihanproduk/layanan
    Route::get('/listtagihanproduklayanan', 'ListTagihanProdukLayananController@index');
    Route::get('/listtagihanproduklayanan/create', 'ListTagihanProdukLayananController@create');
    Route::post('/listtagihanproduklayanan/save', 'ListTagihanProdukLayananController@store');
    Route::get('/listtagihanproduklayanan/edit/{id}', 'ListTagihanProdukLayananController@edit');
    Route::get('/listtagihanproduklayanan/view/{id}', 'ListTagihanProdukLayananController@show');
    Route::put('/listtagihanproduklayanan/update/{id}', 'ListTagihanProdukLayananController@update');
    Route::get('/listtagihanproduklayanan/delete/{id}', 'ListTagihanProdukLayananController@destroy');

//bagian dari produklayanan

//bagian dari project
    //root untuk crud listtagihanproject
    Route::get('/listtagihanproject', 'ListTagihanProjectController@index');
    Route::get('/listtagihanproject/create', 'ListTagihanProjectController@create');
    Route::post('/listtagihanproject/save', 'ListTagihanProjectController@store');
    Route::get('/listtagihanproject/edit/{id}', 'ListTagihanProjectController@edit');
    Route::get('/listtagihanproject/view/{id}', 'ListTagihanProjectController@show');
    Route::put('/listtagihanproject/update/{id}', 'ListTagihanProjectController@update');
    Route::get('/listtagihanproject/delete/{id}', 'ListTagihanProjectController@destroy');
//bagian dari project

//bagian dari fakturpajak
    //root untuk crud listfakturpajak
    Route::get('/listfakturpajak', 'ListFakturPajakController@index');
    Route::get('/listfakturpajak/create', 'ListFakturPajakController@create');
    Route::post('/listfakturpajak/save', 'ListFakturPajakController@store');
    Route::get('/listfakturpajak/edit/{id}', 'ListFakturPajakController@edit');
    Route::get('/listfakturpajak/view/{id}', 'ListFakturPajakController@show');
    Route::put('/listfakturpajak/update/{id}', 'ListFakturPajakController@update');
    Route::get('/listfakturpajak/delete/{id}', 'ListFakturPajakController@destroy');
//bagian dari fakturpajak

//root untuk instansi rekanan
// Route::get('/instansirekanan', function () {
//     return view('page.instansirekanan');
// })->name('instansirekanan');

//root untuk jenissuratkeluar
// Route::get('/create/jenissurat', function () {
//     return view('page.jenissurat');
// })->name('/create/jenisurat');

// //root untuk listsuratmasuk
// Route::get('/create/listsuratmasuk', function () {
//     return view('page.listsuratmasuk');
// })->name('/create/listsuratmasuk');

// //root untuk jenisproduklayanan
// Route::get('/create/jenisproduklayanan', function () {
//     return view('page.jenisproduklayanan');
// })->name('/create/jenisproduklayanan');

//root
//Route::group(['prefix'=>'dropdown'],function(){
    // Route::get('/dpage1', function () {
    //     return view('page.dropdown1');
    // })->name('dpage1');

    // Route::get('/dpage2', function () {
    //     return view('page.dropdown2');
    // })->name('dpage2');

    // Route::get('/dpage3', function () {
    //     return view('page.dropdown3');
    // })->name('dpage3');

    //Route::get('/dpage4', function () {
    //   return view('page.dropdown4');
    //})->name('dpage4');

    // Route::get('/dpage5', function () {
    //     return view('page.dropdown5');
    // })->name('dpage5');

    // Route::get('/dpage6', function () {
    //     return view('page.dropdown6');
    // })->name('dpage6');

    //Route::get('/dpage7', function () {
    //    return view('page.dropdown7');
    //})->name('dpage7');

    // Route::get('/dpage8', function () {
    //     return view('page.dropdown8');
    // })->name('dpage8');

    // Route::get('/dpage9', function () {
    //     return view('page.dropdown9');
    // })->name('dpage9');

    // Route::get('/dpage10', function () {
    //     return view('page.dropdown10');
    // })->name('dpage10');

    // Route::get('/dpage11', function () {
    //     return view('page.dropdown11');
    // })->name('dpage11');

    //Route::get('/dpage12', function () {
    //    return view('page.dropdown12');
    //})->name('dpage12');

    // Route::get('/dpage13', function () {
    //     return view('page.dropdown13');
    // })->name('dpage13');

    // Route::get('/dpage14', function () {
    //     return view('page.dropdown14');
    // })->name('dpage14');

    // Route::get('/dpage15', function () {
    //     return view('page.dropdown15');
    // })->name('dpage15');
    
    //Route::get('/dpage16', function () {
    //    return view('page.dropdown16');
    //})->name('dpage16');

    // Route::get('/dpage17', function () {
    //     return view('page.dropdown17');
    // })->name('dpage17');

    // Route::get('/dpage18', function () {
    //     return view('page.dropdown18');
    // })->name('dpage18');
//});