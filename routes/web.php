<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ListingController;

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

//all Listings
Route::get('/', [ListingController::class, 'index']);

//single
Route::get('/listings/{listing}', [ListingController::class, 'show']);
