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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
           

         
          
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
          @if(!session()->has('SiteUser'))
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login"><i class="fas fa-user"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signup"><i class="fas fa-sign-out-alt"></i> Sign Up</a>
          </li>
          @endif
          @if(session()->has('SiteUser'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/myaccount">My Ads</a></li> 
              <li><a class="dropdown-item" href="/profile">Edit Profile</a></li>
                           
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout <i class="fas fa-sign-out-alt"></i></a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/postadd"><span class="postadd_btn">Post Ads <i class="fas fa-long-arrow-alt-right"></i></span></a>
          </li>          
        </ul>         
      </div>
    </div>
  </nav>
    <div class="container">
        @yield('content')
    </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>