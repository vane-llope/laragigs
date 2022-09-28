@props(['listing'])

<div class="col-sm-6">
    <x-card>
     <div class="row">
       <div class="col-sm-4">
        <img  class="w-100" src="../images/Abstract-blue-wave-on-transparent-background-PNG.png" alt="">  
    </div>
    <div class="col-sm-8" >
 <a class="text-dark nav-link" href="/listings/{{$listing['id']}}"><h4>{{$listing['title']}}</h4></a> 
 <x-listing-tags :tagsCsv="$listing['tags']" />
 <a class="text-dark nav-link" href="#">{{$listing['location']}}</a> 
    </div>
</div>   
    </x-card>
    

</div>