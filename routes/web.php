<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('anasayfa');
})->name('anasayfa');

Route::get('/girisyap', function () {
    return view('girisyap');
})->name('girisyap');

Route::get('/kayit', function () {
    return view('kayit');
})->name('kayit');

Route::get('/sifremiUnuttum', function () {
    return view('kayit');
})->name('sifremiUnuttum');

Route::get('/aksesuarlar', function () {
    return view('aksesuarlar');
});

Route::get('/bandanabone', function () {
    return view('bandanabone');
});

Route::get('/borubone', function () {
    return view('borubone');
});

Route::get('/desenliesarp', function () {
    return view('desenliesarp');
});

Route::get('/ipeksal', function () {
    return view('ipeksal');
});

Route::get('/kasmiresarp', function () {
    return view('kasmiresarp');
});

Route::get('/pamukesarp', function () {
    return view('pamukesarp');
});

Route::get('/pamuksal', function () {
    return view('pamuksal');
});

Route::get('/penyesal', function () {
    return view('penyesal');
});

Route::get('/tesetturbone', function () {
    return view('tesetturbone');
});

Route::get('/topuzbonesi', function () {
    return view('topuzbonesi');
});

Route::get('/desenlisal', function () {
    return view('desenlisal');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/cuzdan', function () {
    return view('cuzdan');
});

Route::get('/',[App\Http\Controllers\Verialma::class,'listele']);
Route::post('/kisikayit',[App\Http\Controllers\Verialma::class,'kaydet']);
Route::get('/pamuksal',[App\Http\Controllers\Verialma::class,'listele1']);
Route::post('/kisigiris',[App\Http\Controllers\Verialma::class,'girisKontrol'])->name('kisigirisyap');
Route::get('/cikisyap',[App\Http\Controllers\Verialma::class,'cikisYap'])->name('cikisyap');
Route::get('/aksesuarlar',[App\Http\Controllers\Verialma::class,'listele2']);
Route::get('/bandanabone',[App\Http\Controllers\Verialma::class,'listele3']);
Route::get('/borubone',[App\Http\Controllers\Verialma::class,'listele4']);
Route::get('/desenliesarp',[App\Http\Controllers\Verialma::class,'listele5']);
Route::get('/desenlisal',[App\Http\Controllers\Verialma::class,'listele6']);
Route::get('/ipeksal',[App\Http\Controllers\Verialma::class,'listele7']);
Route::get('/kasmiresarp',[App\Http\Controllers\Verialma::class,'listele8']);
Route::get('/pamukesarp',[App\Http\Controllers\Verialma::class,'listele9']);
Route::get('/penyesal',[App\Http\Controllers\Verialma::class,'listele10']);
Route::get('/tesetturbone',[App\Http\Controllers\Verialma::class,'listele11']);
Route::get('/topuzbonesi',[App\Http\Controllers\Verialma::class,'listele12']);
Route::get('/profil',[App\Http\Controllers\Verialma::class,'kullaniciBilgi']);

Route::get('/arama',[App\Http\Controllers\Verialma::class,'arama'])->name('arama');

Route::get('/cuzdan',[App\Http\Controllers\Verialma::class,'bakiyeGoster']);
Route::post('/cuzdan',[App\Http\Controllers\Verialma::class,'paraYukle'])->name('paraYukle');



