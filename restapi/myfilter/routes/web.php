<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController as DashAdm,
    KatasensorController as KataAdm,
    RiwayatController as RiwayatAdm};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['web','auth','roles']],function() {
    Route::group(['roles' => 'admin'], function () {
        Route::get('/admin/dashboard', [DashAdm::class, 'index'])->name('adm.dashboard');
        Route::get('/admin/katasensor', [KataAdm::class, 'index'])->name('adm.katasensor');
        Route::get('/admin/riwayat', [RiwayatAdm::class, 'index'])->name('adm.riwayat');
    });
});

require __DIR__.'/auth.php';
