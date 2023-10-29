<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barang;

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

Route::get('/tentang', function() {
    return view('welcome');
});

Route::get('/', function() {
    echo "How are you?";
});

Route::view('/panggil_view', 'welcome');

Route::redirect('/alihkan', '/');

Route::get('/parameter/{id}', function($id) {
    echo "How are you?".$id;
});

Route::group(['prefix' => 'admin'], function() {

    Route::get('/parameter/{id}', function($id) {
        echo "How are you?".$id;
    });

    Route::get('/dashboard', function() {
        echo "Ini adalah dashboard";
    });
});

Route::get('/barang', [Barang::class, 'index']);
