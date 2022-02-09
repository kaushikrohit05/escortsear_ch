@extends('layouts/admin')

@section('content')
<div class="row"><div class="col"><h1>Users</h1></div><div class="col text-end"><a class="btn btn-primary" href="{{ url('/admin/adduser') }}" role="button">Add User</a></div></div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Email Address</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Creation Data</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $row)
            <tr>
              <th scope="row">{{ $row['id'] }}</th>
              <td>{{ $row['fname'] }}</td>
              <td>{{ $row['lname'] }}</td>
              <td>{{ $row['email_address'] }}</td>
              <td>{{ $row['phone'] }}</td>
              <td>{{ $row['created_on'] }}</td>
              <td><td><a href="edituser/{{ $row['id'] }}">Edit</a> | <a href="deleteuser/{{ $row['id'] }}">Delete</a></td></td>
            </tr>
            @endforeach
          </tbody>
          </table>
          {{ $users->links() }}
          
           </div> 
</div>
@endsection

