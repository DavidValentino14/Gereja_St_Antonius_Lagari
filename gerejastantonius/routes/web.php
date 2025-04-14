<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home', 'motto'=>'Lihatlah Salib Tuhan! Enyahlah, semua kuasa jahat! Singa dari Suku Yudea, Tunas Daud telah menang, Haleluya!']);
});
