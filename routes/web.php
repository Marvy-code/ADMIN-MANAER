<?php

use App\Http\Controllers\Admin\UserCtrl;
use App\Http\Controllers\HomeCtrl;
use App\Http\Livewire\Personnels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('pages.index');
// })->name('index');

// Route::get('/notre-equipe', [HomeCtrl::class, 'equipe'])->name('equipe');
// Route::get('/contacts', [HomeCtrl::class, 'contacts'])->name('contacts');
// Route::get('/articles-de-blog', [HomeCtrl::class, 'allArticles'])->name('allArticles');
// Route::get('/c-est-quoi-un-site-vitrine', [HomeCtrl::class, 'siteVitrine'])->name('siteVitrine');
// Route::get('/site-blog', [HomeCtrl::class, 'blog'])->name('blog');
// Route::get('/site-e-commerce', [HomeCtrl::class, 'eCommerce'])->name('eCommerce');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes middleware admin
Route::group([
    "middleware"    => ['auth', 'auth.admin'],
    "as"            => "admin."
], function(){
    Route::group([
        "prefix"    => "admin/habilitations",
        "as"        => "habilitations."
    ], function(){
        Route::get('/personnels', Personnels::class, 'index')->name('admin.personnel');
    });
});
