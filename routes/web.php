<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata_mhs', function () {
    return view('biodata_mhs');
});

Route::get('/biodata_ortu', function () {
    return view('biodata_ortu');
});

Route::get('/riwayat_pendidikan', function () {
    return view('riwayat_pendidikan');
});