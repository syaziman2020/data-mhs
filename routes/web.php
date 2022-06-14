<?php

use App\Http\Controllers\MhsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [MhsController::class, 'index'])->name('index');


    Route::get('/mhs/create', [MhsController::class, 'create'])->name('create');
    Route::post('/mhs/store', [MhsController::class, 'store'])->name('store');
    Route::get('/mhs/{id}/edit', [MhsController::class, 'edit'])->name('edit');
    Route::post('/mhs/{id}/update', [MhsController::class, 'update'])->name('update');
    Route::get('/mhs/{id}/destroy', [MhsController::class, 'destroy'])->name('destroy');
});
