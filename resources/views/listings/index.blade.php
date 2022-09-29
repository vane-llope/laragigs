<x-layout>
@section('content')

@include('partials._hero')
@include('partials._search')

     @if(count($listings)==0) 
     <p>No Listing</p>
   @endif

   @if(count($listings) !=0)
     <div class="row">
   @foreach ($listings as $listing)
   <x-listing-card :listing=$listing /> 
   @endforeach
 </div>
   @endif
   <div class="pagination row">
      <li class="page-item"> {{$listings->links()}} </li>
    
   </div>
</x-layout>