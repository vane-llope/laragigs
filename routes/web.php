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

//#1
Route::get('/hello',function(){
return response("<h1>Hello World</h1>" , 200 )
//by this comman it doesn't read the html tags
->header('Content_type','text/plain')
//custom headers
->header('foo','bar');
});
//--------------------------------------------------------------

//#2
//wild cards
Route::get('/posts/{id}',function($id){
return(' this is post ' . $id);
})
//to controll the passing id which here is number
->where('id','[0-9]+');
//--------------------------------------------------------------

//#3
//rote : http://127.0.0.1:8000/search?name=brad&city=boston
Route::get('/search',function(Request $request){
//dd($request);
return ('i am '. $request->name.' from '.$request->city);
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