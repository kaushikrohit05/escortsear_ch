@extends('layouts/frontend')

@section('content')
<div class="py-3"><h1>ads</h1></div>
               
    @foreach ($ads as $ad)
        <div class="row">
            <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card_body p-3">
                 <h3><a href="/ad/{{ $ad['id'] }}">{{ $ad['title'] }}</a></h3>{{ Str::limit($ad['description'], 120) }}</div>
            </div>
            </div>
        </div>
    @endforeach
    {{ $ads->links() }}  
@endsection

