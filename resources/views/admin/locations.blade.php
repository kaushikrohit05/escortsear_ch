@extends('layouts/admin')

@section('content')
{{ $location }}
<div class="row"><div class="col"><h1>Locations</h1></div><div class="col text-end"><a class="btn btn-primary" href="{{ url('/admin/addlocation') }}" role="button">Add Location</a></div></div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Parent</th>
                <th scope="col">Location</th>
                <th scope="col">Slug</th>
                <th scope="col">Staus</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($location as $row )             
              <tr>
                <th scope="row">{{ $row['id'] }}</th>
                <td>{{ $row['parent'] }}</td>
                <td>{{ $row['location'] }}</td>
                <td>{{ $row['location_slug'] }}</td>
                <td></td>
                <td><a href="editlocation/{{ $row['id'] }}">Edit</a> | <a href="deletelocation/{{ $row['id'] }}">Delete</a></td>
              </tr>
              @foreach ($row->children as $child )
              <tr>
                <th scope="row">{{ $child['id'] }}</th>
                <td>{{ $child['parent'] }}</td>
                <td>{{ $child['location'] }}</td>
                <td>{{ $child['location_slug'] }}</td>
                <td></td>
                <td><a href="editlocation/{{ $child['id'] }}">Edit</a> | <a href="deletelocation/{{ $child['id'] }}">Delete</a></td>
              </tr>
              @endforeach 

              @endforeach   
            </tbody>
          </table> 
          {{ $location->links() }}
           </div> 
</div>
@endsection

