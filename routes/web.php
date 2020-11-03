<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/', function () {
    return view('mine');
});
Route::get('/admin', function () {
    return view('admin-panel');
})->name('admin')->middleware('auth.basic');

Route::get('book/{id}',[BookController::Class,'show']);
Route::get('admin/book/{id}',[BookController::Class,'showAdmin']);
Route::post('order',[BookController::Class,'order'])->name('order');
Route::post('add',[BookController::Class,'add'])->name('bookAdd');
Route::post('update',[BookController::Class,'update'])->name('update');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


