@props(['tagsCsv'])
@php
    $tags = explode(',',$tagsCsv);
 @endphp   
 <div class="d-flex">
    @foreach ($tags as $tag)
  <a  class = 'text-dark nav-link ' href="#">#{{$tag}}</a> 
  @endforeach 
 </div>