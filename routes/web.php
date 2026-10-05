<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
 });

 Route::get('/mahasiswa', function() {
    return 'Halo Mahasiswa';
 });

Route::get('/nama/{Melfa}', function ($Melfa) {
    return 'Nama saya: '.$Melfa;
});

Route::get('/home',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');