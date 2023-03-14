<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{route('index')}}">Pay<span class="color-b">Later</span></a>
      {{-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}

      {{-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
     
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </li>
    </ul> --}}
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('properties-home')}}">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>

       @guest
       <li class="nav-item">
        <a class="btn btn-warning" href="{{route('login')}}">Login</a>
      </li>
       @endguest


    
      </div>

      @auth

    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{auth()->user()->name}}
      </a>
    
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="{{route('dashboard')}}">History</a>
        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
      </div>
    </div>

      
    @endauth
      {{-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
      <!-- <span>
        <a href="{{route('cart-page')}}"><i class="fa fa-shopping-cart cart" value=0  aria-hidden="true"></i></a>
      </span> -->
    </div>
  </nav>