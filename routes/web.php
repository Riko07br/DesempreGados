<?php

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

//Get all unempolyment listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Vagas de Desemprego',
        'listings' => Listing::all()
    ]);
});

//Find specific unempolyment
// Route::get('/listing/{id}', function($id){
//     $listing = Listing::find($id);

//     if($listing){
//         return view('listing', [            
//             'listing' => $listing
//         ]);
//     }else{
//         abort('404');
//     }    
// });

//Find specific unempolyment
Route::get('/listing/{listing}', function(Listing $listing){
    return view('listing', [            
        'listing' => $listing
    ]);   
});