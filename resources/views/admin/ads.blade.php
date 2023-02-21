@extends('layouts/admin')
 
@section('content')
 
<div class="row"><div class="col"><h1>User Ads</h1></div><div class="col text-end"><!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Search Ad
  </button> <a class="btn btn-primary" href="{{ url('/admin/addad') }}" role="button">Add Ads</a></div></div>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="{{ url('/admin/deleteads') }}" enctype="multipart/form-data" >
          @csrf
        <table class="table table-hover">
            <thead>
              <tr><th scope="col"></th>
                <th scope="col">#</th>
                <th width="col">Title</th>
                <th width="col">User</th>
                <th scope="col">Category</th>
                 
                <th scope="col">Staus</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
           
              
            <tbody>
                @foreach ($ads as $row)
                 
              <tr>
                <td scope="col"><input type="checkbox" class="form-check-input" name="adid[]" value="{{ $row->id }}"></td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }} </td>
                <td>{{ $row->user }} </td>
                <td>{{ $row->category }}</td>
                <td>{{ $row->region }} > {{ $row->location }} </td>
                <td>{{ $row->created_at }}</td>
                <td><a href="/admin/editgallery/{{ $row->id }}">Gallery</a> | <a href="/admin/editad/{{ $row->id }}">Edit</a> | <a href="/admin/deletead/{{ $row->id }}">Delete</a></td>
                 
              </tr>
         @endforeach
            
          
          </tbody>
          
          </table>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          {{ $ads->links() }}
          
           </div> 
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Search</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/search_ad" enctype="multipart/form-data" >
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ad ID</label>
            <input type="text" class="form-control" name="adid" required >
             
          </div>
          
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

