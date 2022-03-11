<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/378f3e2d81.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Hello, world!</title>
  </head>
  <body><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">SEOAPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
          @if(!session()->has('SiteUser'))
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/login"><i class="fas fa-user"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signup"><i class="fas fa-sign-out-alt"></i> Sign Up</a>
          </li>
          @endif
          @if(session()->has('SiteUser'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> My Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/myaccount"><i class="fas fa-address-card"></i> My Ads</a></li> 
              <li><a class="dropdown-item" href="/profile"><i class="fas fa-cog"></i> Account Info.</a></li>
                           
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/postadd"><span class="postadd_btn">Post Your Ad <i class="fas fa-long-arrow-alt-right"></i></span></a>
          </li>          
        </ul>         
      </div>
    </div>
  </nav>
<div class="search pt-3">
  <div class="container">
    <form action="/search" method="POST" >
      @csrf
    <div class="row">
      <div class="col-md-6"><div class="mb-3"><select class="form-select" aria-label="Default select" name="category">
         
        @foreach ($search_categories as $category ) 
        <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach 
      </select></div></div>
      <div class="col-md-6"><div class="mb-3"><input type="text" class="form-control" aria-label="Default select" name="keyword" placeholder="Search Here..." />
       
         
       </div></div>
    </div>
    <div class="row">
      <div class="col-md-6"><div class="mb-3"><select class="form-select" aria-label="Default select" name="region"  id="region" >
        <option value="0">All Regions</option>
        @foreach ($search_locations as $location ) 
        <option value="{{ $location->id }}">{{ $location->location }}</option>
        @endforeach 
         
      </select></div></div>
      <div class="col-md-4"><div class="mb-3"><select class="form-select" aria-label="Default select" name="location" id="location">
        <option value="0">All Locations</option>
        @foreach ($search_child_locations as $child_location ) 
        <option value="{{ $child_location->id }}">{{ $child_location->location }}</option>
        @endforeach 
      </select></div></div>
      <div class="col-md-2"><div  class="mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
        
      </div> </div>
    </div>
    </form>
  </div>
</div>


    <div class="container">
        @yield('content')
    </div>
    
    
    <footer class="footer-section mt-5">
      <div class="container">
          <div class="row">
              <div class="col my-3 text-center">
                   
      <a href="/page/terms-and-conditions" class="clickable">Terms and Conditions</a> | <a href="/page/privacy-policy" class="clickable">Privacy Policy</a> | <a href="/page/contacts-us" class="clickable">Contacts Us</a>
                 
              </div>
          </div>
          <div class="row copy-right-section">
              <div class="col my-3 text-center">
                   <a target="_blank" href="" title="Facebook"><i class="fab fa-facebook fa-2x"></i></a>
                   <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a>
                  <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                      
              </div>
          </div>
      </div>
      <a href="#" id="scrollToTop" >
        <i class="fas fa-arrow-alt-circle-up fa-2x"></i>
      </a>
    
  </footer>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('src/js/lightbox-plus-jquery.min.js')}}"></script>
</body>
</html>