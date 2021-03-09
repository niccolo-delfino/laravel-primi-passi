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

Route::get('/', function () {
    $data = [
      'nome' => 'Niccolò',
      'cognome' => 'Delfino',
      'collegamenti' => [
        'chisiamo' => 'chi siamo',
        'dovetrovarci' => 'dove trovarci',
        'contatti' => 'contatti',
        'mission' => 'la nostra mission'
      ]
    ];
    return view('ciao', $data);
});
Route::get('/chisiamo', function () {
    return view('chisiamo');
});
Route::get('/dovetrovarci', function () {
    return view('dovetrovarci');
});
Route::get('/contatti', function () {
    return view('contatti');
});
Route::get('/mission', function () {
    return view('mission');
});
