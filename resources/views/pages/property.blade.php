@include('home.header')

<body>
    @include('home.search')
    <!--/ Form Search End /-->
  
    <!--/ Nav Star /-->
  @include('home.navigation-main')

  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-curclick to view="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">Latest</option>
                <option value="3">For Sale</option>
                <option value="3">For Rent</option>
                <option value="2">Hostels</option>
                <option value="3">For Apartments</option>
                <option value="3">Facilities</option>
              </select>
            </form>
          </div>
        </div>
          @if (count($properties))
               @foreach ($properties as $property)

       {{-- @foreach ($sub_properties_details as $sub_prop) --}}
               <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
           <img src="{{asset('uploads/'. $property->pictures[0])}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                     {{$property->title}}
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                 <a href="{{route('single',$property->id)}}"><span class="price-a">view | GH₵‎ {{$property->price}} / per  month</span></a>
                  </div>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>{{$property->area}}
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>{{$property->bed}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>{{$property->bath}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Kitchen</h4>
                      <span>{{$property->kitchen}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div>
       {{-- @endforeach --}}

        @endforeach
          @else
              <p>No properties yet</p>
          @endif
        {{-- <div class="col-sm-12">
          {{$properties->links('pagination::bootstrap-4')}}
        </div> --}}
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

  <!--/ footer Star /-->
    @include('home.footer-main')

@include('home.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  @include('home.script.script')
  @include('sweetalert::alert')

</body>
</html>
