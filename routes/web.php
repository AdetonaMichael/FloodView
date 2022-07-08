<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CreateReport;
use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify'=>true]);

Route::get('/', [HomeController::class,'index']);

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('/profile', function(){return view('profile');})->name('profile');

});


Route::get('userindex', [UserController::class, 'index']);
Route::get('storeReport',[CreateReport::class, 'storeReport'])->name('create-report');
require __DIR__.'/auth.php';
