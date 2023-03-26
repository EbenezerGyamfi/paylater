@extends('layouts.app')
@section('content')
      <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">We help customers get the BEST!</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/team.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img  src="img/derrick.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                {{-- <span>EstateAgency Exclusive Property</span> --}}
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">The birth of Rentmann
                  <span class="color-d">by the co-founders</span> Tijani Mohammed, Derrick Ofori, Philip Ladzaka And Ebenezer Gyamfi
                  <br> </h3>
              </div>
              <p class="color-text-a">
                It wasn't simple for us to go from our hometown to Accra. We had to spend the night outside without shelter due to the high costs of motels and landlord rent. We might have come under attack. however, that Night, God saved us. Then, we witnessed how Accra's real estate agents abuse their clients. We made the decision to address this issue because we were passionate about making a difference. We enrolled in college to pursue a Bsc. in computer science in order to broaden our perspective on the world. We created Rentmann with the determination and vision to decrease the burden on young people in Ghana, Africa, and the rest of the world. Godspeed to Mother Africa.
              </p>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection