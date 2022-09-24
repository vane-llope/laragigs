<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('Listings',[
        'heading'=>'Latest Listings',
        'listings'=> Listing::all()
    ]);
});
//--------------------------------------------------------------

Route::get('search/{id}',function($id){
 $listing = Listing::find($id);
 if($listing != [])  $listing = [$listing];
 return view('Listings',[
    'heading'=>'Latest Listings',
    'listings'=> $listing
]);
});
//--------------------------------------------------------------