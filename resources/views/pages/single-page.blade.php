@extends('layout')


@section('content')
     <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
          <div class="col-md-5 col-lg-4"> 
              <div class="property-price d-flex justify-content-center foo mb-5 ml-3"> 
                <div class="card-header-c d-flex"> 
                  <div class="card-box-ico"> 
                    <span class="ion-money">₵</span> 
                  </div> 
                  <div class="card-title-c align-self-center mb-3"> 
                    <h5 class="title-c">{{$property->price}} / sem.</h5> 
                  </div> 
                </div> 
              </div>
            </div>
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="{{asset('uploads/'. $property->pictures[0])}}" alt="">
            </div>
            <div class="carousel-item-b">
               <img src="{{asset('uploads/'. $property->pictures[1])}}" alt="" >
            </div>
            <div class="carousel-item-b">
            <img src="{{asset('uploads/'. $property->pictures[2])}}" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              

              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Book View</h3>
                   
                  </div>
          
                 <div class="property-contact">
                  <form class="form-a" method="POST" action="{{route('customer.appointment',$property->id)}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                            placeholder="Name *" name="name" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                            placeholder="Email *" name="email" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <label for="Date">Date</label>
                          <input type="date" class="form-control form-control-lg form-control-a" id="inputDate1"
                            placeholder="" name="date" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <label for="">Time</label>
                          <input type="time" class="form-control form-control-lg form-control-a" id="inputTime1"
                         name="time" placeholder="time" required>
                        </div>
                      </div>

                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <label for="">Phone number</label>
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputPhone1"
                         name="phone" placeholder="enter phone *" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-a">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>

            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">

              <div class="amenities-list color-text-a">
                <div class="title-box-d">
                  <h3 class="title-d">Amenities</h3>
                </div>
              </div>
                @foreach ($property->amenities as $item)
                <ul class="list-a no-margin">
                      <li>{{$item}}</li>
                    </ul>
                    @endforeach

              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Description</h3>
                  </div>
                </div>
              </div>
              
              <div class="property-description">
                <p class="description color-text-a">
                  {{$property->description}}
                </p>
                <p class="description color-text-a no-margin">
                  
                </p>
              </div>
             
                  </div>
            </div>
          </div>
        </div>
          <div class="row mt-4 justify-content-end">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.065699512665!2d-0.3163078798568494!3d5.564582485959226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf981a8975e7bb%3A0xc4d4487298accf44!2sMcCarthy%20Hill%2C%20Mallam!5e0!3m2!1sen!2sgh!4v1674160502993!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
          </div>
      </div>
    </div>
  </section>
@endsection