@extends('layouts/admin')

@section('content')
<div class="row"><div class="col"><h1>Users</h1></div><div class="col text-end"><div class="col text-end"><!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Search User
  </button> <a class="btn btn-primary" href="{{ url('/admin/adduser') }}" role="button"><i class="fas fa-plus"></i> Add</a></div></div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>               
              <th scope="col">Email Address</th>
              <th scope="col">Creation Data</th>
              <th scope="col">Status</th>
              <th  width="150"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $row)
            <tr>
              <th scope="row">{{ $row['id'] }}</th>
              <td>{{ $row['email_address'] }} ( <a href="/admin/userads/{{ $row['id'] }}"> View Ads </a> )</td>
              <td>{{ $row['created_at'] }}</td>               
              <td>@if ($row['isActive']==1)
                <i class="fas fa-check-circle"></i> Active
                @else
                <i class="fas fa-times-circle"></i> InActive
              @endif </td>               
              <td><a href="edituser/{{ $row['id'] }}"><i class="fas fa-edit"></i> Edit</a> | <a href="deleteuser/{{ $row['id'] }}"><i class="fas fa-trash-alt"></i> Delete</a></td></td>
            </tr>
            @endforeach
          </tbody>
          </table>
          {{ $users->links() }}
          
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
        <form method="POST" action="/admin/search_user" enctype="multipart/form-data" >
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="Email_address" required>
           
          </div>
          
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endsection

