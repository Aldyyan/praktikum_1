<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata_mhs', function () {
    $name = "Aldyyan putra Prasetya";
    $lahir = "Magetan, 13 Januari 2007";
    $nip = "253107050006";
    $foto = "images/tugas.jpeg";
    $program = "Teknik Informatika";
    $jurusan = "Teknologi Informasi";
    $alamat = "Malang";
    $telepon = "081230223017";
    return view('biodata.biodata_mhs', 
    ['jeneng' => $name, 'nggen' => $lahir,
     'nomor' => $nip, 'gambar' => $foto,
      'prgm' => $program, 'jrsn' => $jurusan,
      'omah' => $alamat, 'telp' => $telepon
      ] );
});

Route::get('/biodata_ortu', function () {
    $nama_ayh = "Yamanto";
    $kerja_ayh = "Petani";
    $nama_ibu = "Eny sulistyowati";
    $kerja_ibu = "Ibu rumah tangga";
    $alamat_ortu = "Malang";
    $telepon_ortu = "08123446623";
    return view('biodata.biodata_ortu', 
    ['Bapak' => $nama_ayh,
     'Krj_bpk' => $kerja_ayh,
     'mama' => $nama_ibu,
     'Krj_mama' => $kerja_ibu,
     'omah1' => $alamat_ortu,
     'telp1' => $telepon_ortu
     ]);
});

Route::get('/riwayat_pendidikan', function () {
    $jenjang = "SMA/SMK";
    $nama_sekolah_smk = "SMK BinaBangsa Dampit";
    $jurusan = "Teknik Komputer Jaringan";
    $tahun_masuk_smk = "2022";
    $tahun_lulus_smk = "2025";
    $jenjang2 = "perguruan tinggi";
    $nama_perguruan_tinggi = "Politeknik Negeri Malang";
    $tahun_masuk_pt = "2025";
    $jurusan_pt = "Manajemen Informatika";
    return view('biodata.riwayat_pendidikan', 
    [
    'jnjng' => $jenjang,
    'jng_sekolah' => $nama_sekolah_smk,
    'jrsnsmk' => $jurusan, 
    'masuk_smk' => $tahun_masuk_smk,
    'lulus_smk' => $tahun_lulus_smk,
    'jnjng2' => $jenjang2,
    'jng_pt' => $nama_perguruan_tinggi,
    'masuk_pt' => $tahun_masuk_pt,
    'jrsnpt' => $jurusan_pt
    ] );
});

Route::get('/data1/data', function () {
    $nama = "jane doe";
    return view('biodata.data', ['nyamah' => $nama]  );
});