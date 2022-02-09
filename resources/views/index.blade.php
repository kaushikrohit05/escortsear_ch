@extends('layouts/frontend')

@section('content')

  

<div class="row">
    @if ($categories)  
    @foreach ($categories as $category ) 
         
    <div class="col-md-4 text-center">
        
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('uploads/'.$category['category_image'] ) }}" class="card-img-top" alt="{{ $category['category'] }}">
            <div class="card-body">
                <a href="/category/{{ $category['category_slug'] }}"><h5 class="card-title">{{ $category['category'] }}</h5></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        
        
        </div>
    @endforeach 
    @endif
</div>

@endsection

