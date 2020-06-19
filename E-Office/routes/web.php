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


Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('/instansi/create', 'InstansiController@create');
Route::post('/instansi/save', 'InstansiController@save');
Route::get('/instansi', 'InstansiController@index');


//
Route::get('/dashboard', function () {
    return view('page.home');
})->name('dashboard');

//root untuk instansi rekanan
Route::get('/instansirekanan', function () {
    return view('page.instansirekanan');
})->name('instansirekanan');

//root untuk surat keluar
Route::group(['prefix'=>'dropdown'],function(){
    Route::get('/dpage1', function () {
        return view('page.dropdown1');
    })->name('dpage1');

    Route::get('/dpage2', function () {
        return view('page.dropdown2');
    })->name('dpage2');

    Route::get('/dpage3', function () {
        return view('page.dropdown3');
    })->name('dpage3');

    Route::get('/dpage4', function () {
        return view('page.dropdown4');
    })->name('dpage4');

    Route::get('/dpage5', function () {
        return view('page.dropdown5');
    })->name('dpage5');

    Route::get('/dpage6', function () {
        return view('page.dropdown6');
    })->name('dpage6');

    Route::get('/dpage7', function () {
        return view('page.dropdown7');
    })->name('dpage7');

    Route::get('/dpage8', function () {
        return view('page.dropdown8');
    })->name('dpage8');

    Route::get('/dpage9', function () {
        return view('page.dropdown9');
    })->name('dpage9');

    Route::get('/dpage10', function () {
        return view('page.dropdown10');
    })->name('dpage10');

    Route::get('/dpage11', function () {
        return view('page.dropdown11');
    })->name('dpage11');

    Route::get('/dpage12', function () {
        return view('page.dropdown12');
    })->name('dpage12');

    Route::get('/dpage13', function () {
        return view('page.dropdown13');
    })->name('dpage13');

    Route::get('/dpage14', function () {
        return view('page.dropdown14');
    })->name('dpage14');

    Route::get('/dpage15', function () {
        return view('page.dropdown15');
    })->name('dpage15');
    
    Route::get('/dpage16', function () {
        return view('page.dropdown16');
    })->name('dpage16');

    Route::get('/dpage17', function () {
        return view('page.dropdown17');
    })->name('dpage17');

    Route::get('/dpage17', function () {
        return view('page.dropdown17');
    })->name('dpage17');

    Route::get('/dpage18', function () {
        return view('page.dropdown18');
    })->name('dpage18');
});

Route::get('/', function () {
    return view('page.profile');
})->name('profile');

//root untuk user profile

Route::get('/create/jenissurat', function () {
    return view('page.jenissurat');
})->name('/create/jenisurat');