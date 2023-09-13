<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// returns the home page with all contacts
Route::get('/', ContactController::class .'@index')->name('contacts.index');
// returns the form for adding a contacts
Route::get('/contacts/create', ContactController::class . '@create')->name('contacts.create')->middleware('auth');
// adds a contacts to the database
Route::post('/contacts', ContactController::class .'@store')->name('contacts.store')->middleware('auth');
// returns a page that shows a full contacts
Route::get('/contacts/{contacts}', ContactController::class .'@show')->name('contacts.show');
// returns the form for editing a contacts
Route::get('/contacts/{contacts}/edit', ContactController::class .'@edit')->name('contacts.edit')->middleware('auth');
// updates a contacts
Route::put('/contacts/{contacts}', ContactController::class .'@update')->name('contacts.update')->middleware('auth');
// deletes a contacts
Route::delete('/contacts/{contacts}', ContactController::class .'@destroy')->name('contacts.destroy')->middleware('auth');
// Login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');