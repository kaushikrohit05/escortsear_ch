@extends('layouts/admin')

@section('content')
<h1>Edit Page</h1>
 
<form method="POST" action="{{ url('/admin/savepage') }}/{{ $page->id }}" >
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Page Name</label>
        <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name"  value="{{ $page->page_name }}">
        <span class="text-danger">@error('page_name')
          {{ $message }}
        @enderror</span>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Page Slug</label>
        <input type="text" class="form-control" id="page_slug" name="page_slug" placeholder="Page Slug" value="{{ $page->page_slug }}"  >  
        <span class="text-danger">@error('page_slug')
          {{ $message }}
        @enderror</span>      
      </div> 
      <div class="mb-3">
        <label  class="form-label">Meta Title</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="page_meta_title" rows="3">{{ $page->page_meta_title }}</textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label">Meta Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="page_meta_description" rows="3">{{ $page->page_meta_description }}</textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label">Page Content</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="page_description" rows="3">{{ $page->page_description }}</textarea>
      </div> 
      
     <div class="mb-3">
        <label  class="form-label">Staus</label>
        <select class="form-select" aria-label="Default select example" name="isActive">
          <option value="1">Active</option>
          <option value="2">Inactive</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection