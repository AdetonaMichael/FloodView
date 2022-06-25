<?php

use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CreateReport;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('reports', function(){
    return view('reports');
})->middleware(['auth','verified']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    Route::get('filemanager', [FileManagerController::class, 'index']);
});

Route::get('userindex', [UserController::class, 'index']);
Route::get('storeReport',[CreateReport::class, 'storeReport'])->name('create-report');
require __DIR__.'/auth.php';
