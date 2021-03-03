<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
})->name('index');


//Route::get('services', fn () => view('services'))->name('services');
Route::get('servisebi', function (){
    return view('servisebi');
})->name('servisebi');

//Route::get('services', [IndexController::class, 'services'])->name('services');

Route::get('/mshenebloba',function (){
    return view('mshenebloba');
})->name('mshenebloba');

Route::get('/remonti',function (){
    return view('remonti');
})->name('remonti');

Route::get('/about',function (){
    return view('about');
})->name('about');

Route::get('/kontaqti',function (){
    return view('kontaqti');
})->name('kontaqti');

Route::get('/momsakhurebebi',function (){
    return view('momsakhurebebi');
})->name('momsakhurebebi');

