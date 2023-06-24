<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use GuzzleHttp\Middleware;

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

// Common Resource Routes:
// index - Show all
// show - Show single
// create - Show form to create new
// store - Store new
// edit - Show form to edit
// update - Update
// destroy - Delete  

//Get all unemployment listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

//Store listing
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');

//Edit listing - show form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Edit listing - submit form
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Find specific unemployment
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Store user
Route::post('/user', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log user in
Route::post('/user/authenticate', [UserController::class, 'authenticate']);
