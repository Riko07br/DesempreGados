<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//Get all unempolyment listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listing/create', [ListingController::class, 'create']);

//Store listing
Route::post('/listing', [ListingController::class, 'store']);

//Edit listing - show form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

//Edit listing - submit form
Route::put('/listing/{listing}', [ListingController::class, 'update']);

//Find specific unemployment
Route::get('/listing/{listing}', [ListingController::class, 'show']);
