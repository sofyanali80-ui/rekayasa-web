<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $mahasiswa = [
        'nama'   => 'Ali Sopyan',
        'nim'    => '251011700334',
        'prodi'  => 'Sistem Informasi',
        'kampus' => 'Universitas Pamulang',
        'status' => 'Aktif'
    ];

    return view('mahasiswa', compact('mahasiswa'));
});