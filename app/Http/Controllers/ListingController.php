<?php

namespace App\Http\Controllers;

use pagination;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        // dd(request('tag'));
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
            //'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePagination()
        ]);
    }
    //get and show single listimg
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listings' => [$listing]
        ]);
    }
    //show create form
    public function create()
    {
        return view('listings.create');
    }

    //store listing data
    public function store()
    {
        //dd(Request()->all());
        $formFields = Request()->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        Listing::create($formFields);
        return redirect('/')->with('message','Listing Created Successfully');
    }
}
