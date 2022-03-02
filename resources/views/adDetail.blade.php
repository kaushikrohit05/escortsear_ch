@extends('layouts/frontend1')

@section('content')
 
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<div class="row my-3 breadcrumb"><div class="col small"><a href="/"><i class="fas fa-home"></i></a> > 
<a href="/{{ $ads['category'] }}">{{ $ads['category'] }}</a> > 
<a href="/{{ $ads['category'] }}/{{ $ads['region'] }}">{{ $ads['region'] }}</a> > 
<a href="/{{ $ads['category'] }}/{{ $ads['location'] }}">{{ $ads['location'] }}</a> > </div></div>

<div class="row my-3 backto"><div class="col small"><a href="/"><i class="far fa-arrow-alt-circle-left"></i> Back to search</a>
<div class="small my-3">{{ $ads['created_at'] }}<br>
    24 YEARS | {{ $ads['category'] }} | {{ $ads['region'] }} | {{ $ads['location'] }}<br>
    Ad ID : {{ $ads['id'] }}</div>
</div></div>
<div class="row">
    <div class="col-md-9"><h1>{{ $ads['title'] }}</h1>
    <div>{{ $ads['title'] }}</div>
    {{ $ads['description'] }}
    
    
    <div class="row my-5">
    @foreach ($gallery as $image)
    <div class="col-md-4 mb-3git "><a href="{{ asset('user_images/'.$image['ad_image'] ) }}" data-lightbox="roadtrip"><img src="{{ asset('user_images/'.$image['ad_image'] ) }}" class="img-fluid"></a></div>
    @endforeach
</div>
    
</div>
<div class="col-md-3">
    <div class="d-grid gap-3 mt-5">
        <a href="http://tel:" class="btn btn-primary"><i class="fas fa-phone-alt"></i> TELEPHONE</a>
        <a class="btn btn-success" href="#" role="button"><i class="fab fa-whatsapp"></i> WHATSAPP</a>
        <a class="btn btn-light" href="#" role="button">REPORT</a>
      </div>   
    
     
</div></div>

@endsection

