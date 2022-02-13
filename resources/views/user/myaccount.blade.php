@extends('layouts/frontend')

@section('content')
<div class="row my-5">
  <div class="col-md-12 mb-5"><h1>Dashboard</h1></div>
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
  
   
  </div>
</div>
@endsection