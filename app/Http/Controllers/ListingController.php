<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        return view('listings.index',[
            'listings'=> Listing::all()
        ]);
    }
    //get and show single listimg
    public function show(Listing $listing){
        return view('listings.show',[
            'listings'=> [$listing]
        ]);
    }
}
