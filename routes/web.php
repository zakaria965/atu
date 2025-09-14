<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPage; 
use App\Http\Controllers\BookController; 


Route::get('/',[ControllerPage::class,'index'])->name('index_page');
Route::get('/about',[ControllerPage::class,'about'])->name('about_page');
Route::get('/book_list',[BookController::class,'index'])->name('Books');

