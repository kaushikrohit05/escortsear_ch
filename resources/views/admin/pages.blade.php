@extends('layouts/admin')

@section('content')
<div class="row"><div class="col"><h1>Pages</h1></div><div class="col text-end"><a class="btn btn-primary" href="{{ url('/admin/addpage') }}" role="button">Add Page</a></div></div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th width="100">Page</th>
                <th scope="col">Slug</th>                 
                <th scope="col">Staus</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pages as $row)
                    
                 
              <tr>
                <th>{{ $row['id'] }}</th>                 
                <td>{{ $row['page_name'] }} </td>
                <td>{{ $row['page_slug'] }}</td>
                <td>{{ $row['isActive'] }}</td>
                <td>{{ $row['created_at'] }}</td>
                <td><a href="editpage/{{ $row['id'] }}">Edit</a> | <a href="deletepage/{{ $row['id'] }}">Delete</a></td>
              </tr>
         @endforeach
            </tbody>
          </table>
          {{ $pages->links() }}
          
           </div> 
</div>
@endsection

