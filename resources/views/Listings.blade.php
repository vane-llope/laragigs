<h1>Loops Like Foreach & If Statments</h1>
<h2>{{$heading}}</h2>

<h2><a href="/">Show All Listings</a></h2>

     @if(count($listings)==0) 
     <p>No Listing</p>
   @endif

   @if(count($listings) !=0)
   @foreach ($listings as $listing)
      <a href="/search/{{$listing['id']}}"><h2>{{$listing['id']}} : {{$listing['title']}}</h2></a> 
       <p>{{$listing['description']}}</p>
   @endforeach
   @endif