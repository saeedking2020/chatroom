<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//})->middleware('auth')->name('index');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/insert',[ChatController::class,'insert'])->name('insert')->middleware('auth');
Route::get('/', [ChatController::class,'display'])->name('show')->middleware('auth');
Route::delete('/delete/{id}',[ChatController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[ChatController::class,'edit'])->name('edit');
Route::put('/update/{id}',[ChatController::class,'update'])->name('update');

Route::get('/about', function (){
    return view('about');
})->name('about');
