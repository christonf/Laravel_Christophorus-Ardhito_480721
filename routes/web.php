<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get( '/halo/{nama}' , function($nama) {
    return '<h1>Halo ' . $nama . '</h1>';
    });

Route::get( '/halo/{nama?}' , function($nama =
'Tanpa Nama' ) {
return '<h1>Halo ' . $nama . '</h1>';
});

Route::get('/halo-dunia', function() {
    return view('halo_dunia');
    });

Route::get('/home', function () {
    return view('home');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/uts2022', function() {
    return view('UTS_WEB2_2022_CHRISTOPHORUS');
});

Route::get('/inisialisasi', function() {
    return view('inisialisasi');
});

Route::get('/matkul', function() {
    $matkul = DB::table('u_t_s')->get();
    return view('matkul', ['matkul' => $matkul]);
});

Auth::routes();

Route::resource('posts',
'App\Http\Controllers\PostController');

Route::resource('projects',
'App\Http\Controllers\ProjectsController');

Route::resource('abouts',
'App\Http\Controllers\AboutController');

Route::resource('education',
'App\Http\Controllers\EducationController');

Route::resource('uts',
'App\Http\Controllers\UTSController');
// Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
