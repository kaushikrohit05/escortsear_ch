@extends('layouts/admin')

@section('content')
<h1>Create Category</h1>
 
<form method="POST" action="{{ url('/admin/savecategory') }}" enctype="multipart/form-data" >
    @csrf
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Category"  value="{{ old('category') }}">
        <span class="text-danger">@error('category')
          {{ $message }}
        @enderror</span>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Slug</label>
        <input type="text" class="form-control" id="category_slug" name="category_slug" placeholder="Category Slug" value="{{ old('category_slug') }}"  >  
        <span class="text-danger">@error('category_slug')
          {{ $message }}
        @enderror</span>      
      </div> 
      <div class="mb-3">
        <label for="formFile" class="form-label">Category Image</label>
        <input class="form-control" type="file" id="formFile" name="category_image">
      </div> 
      <div class="mb-3">
        <label  class="form-label">Small Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="small_desc" rows="3">{{ old('small_desc') }}</textarea>
      </div> 
      <div class="mb-3">
        <label  class="form-label">Meta Title</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="meta_title" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label">Meta Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="meta_description" rows="3"></textarea>
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