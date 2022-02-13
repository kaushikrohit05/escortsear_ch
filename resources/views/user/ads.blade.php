@extends('layouts/frontend')

@section('content')
<div class="row my-5">
  <div class="col-md-12 mb-5"><h1>My Ads</h1></div>
    <div class="col-md-3">
<div class="card"><div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="fas fa-user"></i> <a href="/myaccount">Dashboard</a></li>
        <li class="list-group-item"><i class="fas fa-address-card"></i> <a href="/user/ads">My Ads</a></li>
        <li class="list-group-item"><i class="fas fa-cog"></i> <a href="/profile">Account Info</a></li>
        <li class="list-group-item"><i class="fas fa-trash-alt"></i> <a href="/user/delete_account">Delete Account</a></li>
         
      </ul></div></div>
 
</div>
<div class="col-md-9">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th width="col">Title</th>
            <th width="col">User</th>
            <th scope="col">Category</th>
            <th scope="col">Location</th>
            <th scope="col">Staus</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ads as $row)
             
          <tr>
            <th>{{ $row->id }}</th>
            <th>{{ $row->title }} </th>
            <td>{{ $row->user }} </td>
            <td>{{ $row->category }}</td>
            <td>{{ $row->region }} > {{ $row->location }} </td>
            <td>{{ $row->created_at }}</td>
            <td><a href="editad/{{ $row->id }}"><i class="fas fa-edit"></i></a> | <a href="deletead/{{ $row->id }}"><i class="fas fa-trash-alt"></i></a></td>
          </tr>
     @endforeach
        </tbody>
      </table>
      {{ $ads->links() }}
   
  </div>
</div>
@endsection