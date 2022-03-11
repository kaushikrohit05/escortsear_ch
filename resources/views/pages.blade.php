@extends('layouts/frontend')

@section('content')
<div class="row my-5">
    <div class="col-md-12"><h1 class="mb-3">{{ $page->page_name }}</h1>
    <div class="content">{{ $page->page_description }}</div></div>
</div>


@endsection

