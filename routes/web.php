<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
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
Route::delete('article/delete{article}' , [ArticleController::class, 'destroy'])->name('article.delete');


Route::get('tags/create' , [TagController::class , 'create'])->name('tag.create');
Route::post('tags/store' , [TagController::class , 'store'])->name('tag.store');