@extends('layouts/frontend')

@section('content')

  <div class="row my-5"><div class="col text-center"><h1 class="my-3">Post Your Adult Advertisement or Search Hot Advertisers</h1>
    <h2 class="my-3">Locate the Best Escorts in Your City</h2>
    Sduko is home to the top-rated female escorts in India. You come to a number of fresh classified ads for the sexy babes who are also eager to engage with you sexually. Get ready to bang up hot escorts, transsexual, swinger meeting, gay escorts, and adult meeting in your city.This is an open platform where pleasure seekers and escorts come to find their interests. If you are not able to find your dream girls, create your profile and ask for the services you are looking for. This is a highly visited adult classified ad portal that helps you find out the babes you dream of. Post your classified ads for FREE if you don’t find a perfect profile.</div></div>

<div class="row categories">
    @if ($categories)  
    @foreach ($categories as $category ) 
         
    <div class="col-md-4">
        
        <div class="card" >
            <img src="{{ asset('uploads/'.$category['category_image'] ) }}" class="card-img-top" alt="{{ $category['category'] }}">
            <a href="/category/{{ $category['category_slug'] }}"><h5 class="card-title  text-center">{{ $category['category'] }}</h5></a><div class="card-body">
              <p class="card-text">{{ $category['category_small_description'] }}</p>
              <ul>@foreach ($featured_locations as $featured_location)
                <li><a href="/category/{{ $category['category_slug'] }}/{{ $featured_location->location_slug }}">{{ $featured_location->location }} {{ $category['category'] }}</a></li>
              @endforeach</ul>
                
              
               
            </div>
          </div>
        
        
        </div>
    @endforeach 
    @endif
</div>

@endsection

