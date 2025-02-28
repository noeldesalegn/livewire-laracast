<?php

use App\Livewire\ArticleIndex;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class);
//Route::get('/search', Search::class);
Route::get('/articles/{article}', ShowArticle::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
