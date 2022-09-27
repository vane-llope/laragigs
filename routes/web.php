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

Route::get('search/{listing}',function(Listing $listing){
 /*$listing = Listing::find($id);
 if($listing == null) abort('404');
 if($listing != [])  $listing = [$listing];*/
 return view('Listing',[
    'heading'=>'Latest Listings',
    'listings'=> [$listing]
]);
});
//--------------------------------------------------------------
