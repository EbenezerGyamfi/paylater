<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentmann</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo2.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href={{ asset('lib/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href={{ asset('lib/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/animate/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/ionicons/css/ionicons.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">


    <!-- Main Stylesheet File -->
    <link href={{ asset('css/style.css') }} rel="stylesheet">

    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


<body>


    <!--/ Form Search Star /-->
    <div class="click-closed"></div>

    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" method="GET" action="#">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <input type="text" name="property" class="form-control form-control-lg form-control-a"
                                placeholder="search property here...">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('index') }}"><img src="{{ asset('img/lg.png') }}"
                    width="60" height="60" alt="" srcset=""></a>
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
                        <a class="nav-link {{ \Request::route()->getName() == 'index' ? 'active' : '' }}"
                            href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'about' ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('properties-home') }}">Property</a> --}}
                        <a class="nav-link {{ \Request::route()->getName() == 'properties-home' ? 'active' : '' }}"
                            href="{{ route('properties-home') }}">Property</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'contact' ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                        {{-- class="nav-link" href="{{route('contact')}}"  --}}
                    </li>

                    {{-- @guest
       <li class="nav-item">
        <a class="btn btn-warning" href="{{route('login')}}">Login</a>
      </li>
       @endguest --}}


                    <li class="nav-item ">
                        <div class="justify-content-end">
                            <a href="https://wa.me/0240994061" target="_blank">
                                <img src="{{ asset('img/watsapplogo.png') }}" width="40px" height="40px"
                                    alt="" srcset="">
                            </a>
                        </div>
                    </li>

            </div>

            @auth

                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('dashboard') }}">History</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>


            @endauth
            {{-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
            <!-- <span>
        <a href="{{ route('cart-page') }}"><i class="fa fa-shopping-cart cart" value=0  aria-hidden="true"></i></a>
      </span> -->
        </div>
    </nav>

    <!--/ Nav End /-->

    <!--/ Carousel Star /-->

    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('properties-home') }}">Property</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a
                                    href="https://www.facebook.com/profile.php?id=100090762706554&mibextid=LQQJ4d
                                                ">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://twitter.com/rentmannglobal?s=11&t=KUjbO1yAsumHzeY4gOZEEw
                                                ">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://instagram.com/rentmannglobal?igshid=YmMyMTA2M2Y=
                                                ">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">customer.rentmann@gmail.com</span> All Rights Reserved.
                        </p>
                    </div>
                    
                    <div class="credits">
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
                        Designed by <a href="#">customer.rentmann@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src={{ asset('lib/jquery/jquery.min.js') }}></script>
    <script src={{ asset('lib/jquery/jquery-migrate.min.js') }}></script>
    <script src={{ asset('lib/popper/popper.min.js') }}></script>
    <script src={{ asset('lib/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('lib/easing/easing.min.js') }}></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/scrollreveal/scrollreveal.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src={{ asset('contactform/contactform.js') }}></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>


    @include('sweetalert::alert')
</body>

</html>
