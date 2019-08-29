<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/xin-chao', function() {
    return 'xin chào';
});

Route::get('/xin-chao/{hoai}', function ($ten) {
    return 'xin chào bạn ' . $ten;
});

Route::get('/xin-chao/{ten}/{namsinh}', function ($ten, $namsinh) {
    return 'xin chào bạn ' .'<b>'. $ten .'</b>'  . '<br> Sinh năm: ' . $namsinh;
})->where(['ten' => '[a-z]+', 'namsinh' => '[0-9]+']) ;