<x-layout>
@section('content')
<p><a href="/">Back</a></p>
     @if(count($listings)==0) 
     <p>No Listing</p>
   @endif
   @if(count($listings) !=0)
 
   @foreach ($listings as $listing)
   <x-card class="alert-light">
   <div class="text-center" >
    <img  class="w-100"
    src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/Abstract-blue-wave-on-transparent-background-PNG.png')}}" alt="" />

   <h2 >{{$listing['title']}}</h2>
       <p>{{$listing['company']}}</p>
       <p>{{$listing['email']}}</p>
       <p>{{$listing['website']}}</p>
       <p>{{$listing['location']}}</p>
       <p>{{$listing['description']}}</p>
       <x-listing-tags :tagsCsv="$listing['tags']" />
      </div>
   </x-card>
   @endforeach
   @endif
</x-layout>