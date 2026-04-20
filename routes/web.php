<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// articles routes


Route::get('articles/index' , [ArticleController::class , 'index'])->name('article.index');
Route::get('articles/create' , [ArticleController::class , 'create'])->name('article.create');
