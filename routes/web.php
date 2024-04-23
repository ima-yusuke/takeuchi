<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

Route::get('/login-page', [Register::class, 'login_page'])->name('login_page');
Route::post('/login-page', [Register::class, 'login_try'])->name('login_try');

Route::get('/', [Register::class, 'open_home'])->name('open_home');

//検索
Route::post('/', [Register::class, 'search_data'])->name('search_data');


//住所検索
Route::get('/open-address', [Register::class, 'open_address'])->name('open_address');
Route::post('/open-address', [Register::class, 'search_address'])->name('search_address');

//一覧表示
Route::get('/open_lists', [Register::class, 'open_lists'])->name('open_lists');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
