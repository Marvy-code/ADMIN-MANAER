<?php

use App\Http\Livewire\Personnels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
