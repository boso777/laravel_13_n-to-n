<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// articles routes


Route::get('articles/index' , [ArticleController::class , 'index'])->name('article.index');
Route::get('articles/create' , [ArticleController::class , 'create'])->name('article.create');
Route::post('articles/store' , [ArticleController::class , 'store'])->name('article.store');
Route::get('articles/show/{article}' , [ArticleController::class , 'show'])->name('article.show');
Route::get('articles/edit/{article}' , [ArticleController::class , 'edit'])->name('article.edit');
Route::put('articles/update{article}', [ArticleController::class , 'update'])->name('article.update');

