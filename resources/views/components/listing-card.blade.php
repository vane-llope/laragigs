@props(['listing'])

<div class="col-sm-6">
    <x-card>
       <div class="col-sm-4 ">
        <img  class="w-100" src="../images/Abstract-blue-wave-on-transparent-background-PNG.png" alt="">  
    </div>
    <div class="col-sm-8" >
 <a class="text-dark nav-link" href="/search/{{$listing['id']}}"><h4>{{$listing['id']}} : {{$listing['title']}}</h4></a> 
 <a class="text-dark nav-link" href="#">{{$listing['tags']}}</a> 
 <a class="text-dark nav-link" href="#">{{$listing['location']}}</a> 
    </div>
    </x-card>
    

</div>