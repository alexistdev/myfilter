<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController as DashAdm,
    KatasensorController as KataAdm,
    RiwayatController as RiwayatAdm};
use App\Http\Controllers\Home\{HomeController as HomeUser};
use App\Http\Controllers\FrontendController as Home;

//Route::redirect('/', '/login');
Route::get('/', [Home::class,'index'])->name('frontend.home');
Route::get('/pulau_pawahang', [Home::class,'pahawang'])->name('frontend.pahawang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['web','auth','roles']],function() {
    Route::group(['roles' => 'admin'], function () {
        Route::get('/admin/dashboard', [DashAdm::class, 'index'])->name('adm.dashboard');
        Route::get('/admin/katasensor', [KataAdm::class, 'index'])->name('adm.katasensor');
        Route::post('/admin/katasensor', [KataAdm::class, 'store'])->name('adm.katasensor.save');
        Route::get('/admin/riwayat', [RiwayatAdm::class, 'index'])->name('adm.riwayat');
    });
    Route::group(['roles' => 'user'], function () {
        Route::get('/user/dashboard/{id?}', [HomeUser::class, 'index'])->name('usr.dashboard');
        Route::post('/user/dashboard', [HomeUser::class, 'filter'])->name('usr.filter');
    });
});

require __DIR__.'/auth.php';
