@extends('layouts/frontend')
@section('content')
<div class="ads_list">
<div class="row my-3 breadcrumb"><div class="col small"><a href="/"><i class="fas fa-home"></i></a> > 
    <a href="/{{ $s_category->category_slug }}">{{ $s_category->category }}</a> > 
    @if ($s_location)    
    <a href="/{{ $s_category->category_slug }}/{{ $s_location->location_slug }}">{{ $s_location->location }}</a> > 
    @endif
    </div></div>

    @php ($i = 0)
               
    @foreach ($ads as $ad)
    @php ($i++)  
     
        <div class="row">
            <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card_body p-3">
                  <div class="row">
                      <div class="col-sm-2">
                        
                       
                        <div id="myCarousel_{{ $i  }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @php ($y = 0)
                                @foreach ($ad->gallery as $image )
                                <div class="carousel-item  
                                @if ($y == 0)
                                @php ($y = 2)
                                active
                                @endif 
                                ">
                                <img src="{{ asset('user_images/'.$image->ad_image ) }}" class="d-block w-100" alt="...">
                                  </div>
                                
                            @endforeach
                            
                              
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel_{{ $i }}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel_{{ $i }}" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                        
                      </div>
                      <div class="col-sm-10"><h3><a href="/ad/{{ $ad['id'] }}">{{ $ad['title'] }}</a></h3>
                        <div>{{ Str::limit($ad['description'], 120) }}</div>
                        <div class="small my-3">24 YEARS | {{ $ad->category }} | {{ $ad['region'] }} | {{ $ad['region'] }}</div></div>
                    </div>  
                 
                
                </div>
            </div>
            </div>
        </div>
    @endforeach
    {{ $ads->links() }}  
</div>
@endsection

