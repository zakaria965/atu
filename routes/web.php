<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPage; 
use App\Http\Controllers\BookController; 


Route::get('/',[ControllerPage::class,'index'])->name('index_page');
Route::get('/about',[ControllerPage::class,'about'])->name('about_page');
Route::get('/book_list',[BookController::class,'index'])->name('Books');
Route::get('/Book/create',[BookController::class,'create'])->name('Book.create');
Route::post('/Book',[BookController::class,'store'])->name('Book.store');
Route::get('/Book/{id}/edit', [BookController::class, 'edit'])->name('Book.edit');
Route::put('/Book/{id}', [BookController::class, 'update'])->name('Book.update');
Route::delete('/Book/{id}', [BookController::class, 'destroy'])->name('Book.destroy');



