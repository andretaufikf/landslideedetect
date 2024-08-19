<?php

use Illuminate\Support\Facades\Route;
//panggil controller detektor longsor
use App\Http\Controllers\Detektorlongsor;

Route::get('/', function () {
    return view('monitoring');
});

Route::get( '/bacasuhu', [Detektorlongsor::class, 'bacasuhu']);
Route::get( '/bacakelembaban', [Detektorlongsor::class, 'bacakelembaban']);
Route::get( '/bacalongitude', [Detektorlongsor::class, 'bacalongitude']);
Route::get( '/bacalatitude', [Detektorlongsor::class, 'bacalatitude']);
Route::get( '/bacaAx', [Detektorlongsor::class, 'bacaAx']);
Route::get( '/bacaAy', [Detektorlongsor::class, 'bacaAy']);
Route::get( '/bacaAz', [Detektorlongsor::class, 'bacaAz']);
Route::get( '/bacaGx', [Detektorlongsor::class, 'bacaGx']);
Route::get( '/bacaGy', [Detektorlongsor::class, 'bacaGy']);
Route::get( '/bacaGz', [Detektorlongsor::class, 'bacaGz']);
Route::get( '/bacaMx', [Detektorlongsor::class, 'bacaMx']);
Route::get( '/bacaMy', [Detektorlongsor::class, 'bacaMy']);
Route::get( '/bacaMz', [Detektorlongsor::class, 'bacaMz']);

//route untuk menyimpan ke tb_suhu
Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}/{nilailongitude}/{nilailatitude}/{nilaiAx}/{nilaiAy}/{nilaiAz}/{nilaiGx}/{nilaiGy}/{nilaiGz}/{nilaiMx}/{nilaiMy}/{nilaiMz}', [Detektorlongsor::class, 'simpansensor']);
