<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\AjaxController;

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

Route::get('/oqroyana',function (){
    return view('oqroyana');
})->name('oqroyana');

Route::get('/mirtskhulava',function (){
    return view('mirtskhulava');
})->name('mirtskhulava');

Route::get('/megadidube',function (){
    return view('megadidube');
})->name('megadidube');





Route::get('/remonti',function (){
    return view('remonti');
})->name('remonti');

Route::get('/black-frame',function (){
    return view('black-frame');
})->name('black-frame');

Route::get('/green-frame',function (){
    return view('green-frame');
})->name('green-frame');

Route::get('/white-frame',function (){
    return view('white-frame');
})->name('white-frame');

Route::get('/premium',function (){
    return view('premium');
})->name('premium');






Route::get('/about',function (){
    return view('about');
})->name('about');

Route::get('/dizaini',function (){
    return view('dizaini');
})->name('dizaini');

Route::get('/gayidvebi',function (){
    return view('gayidvebi');
})->name('gayidvebi');

Route::get('/teqnikis-gaqiraveba',function (){
    return view('teqnikis-gaqiraveba');
})->name('teqnikis-gaqiraveba');

Route::get('/dasuftaveba',function (){
    return view('dasuftaveba');
})->name('dasuftaveba');

Route::get('/kontaqti',function (){
    return view('kontaqti');
})->name('kontaqti');

Route::get('/momsakhurebebi',function (){
    return view('momsakhurebebi');
})->name('momsakhurebebi');


//Route::get('/subscribers-form', [SubscribersController::class, 'create']);
//Route::post('/subscribers-form', [SubscribersController::class, 'store']);

//Route::get('subscribers-form', 'SubscribersController@create');
//Route::post('subscribers-form', 'SubscribersController@store');

Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);

Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
