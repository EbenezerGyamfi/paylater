@extends('layouts.app')

@section('content')
        <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Let's Show you </span>
                                            <br> Way Home
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Quality but affordable Homes,</span>
                                            <br> Our Hallmark
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Stay with Us, </span> We handle your
                                            <br> Landlord.
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-12">
                   <x-front-end.title title-type="Rentmann"/>
                   <x-button type="button" title="Submit User"/>
                   <x-button type="submit" title="Update User" class="mb-4" />
                </div> --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Credit</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sign up for our paylater program, and we'll pay your landlord in full. You have the
                                option of paying us on a monthly, weekly, or daily basis.
                                " A friend in need is always a friend indeed" by Euripides
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-renren"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Rent</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                We rent space to our esteemed clients. We carefully examine the apartment's standard
                                amenities, such as pipes for water, a bathroom, and lighting, to ensure a comfortable
                                stay.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sell</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                We help sellers advertise their facilities in collaboration with our business. Every
                                property sold on our platform has a Lands Commission license. Our legal staff is
                                available around-the-clock to help you sell your facility.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Products</h2>
                        </div>
                        <div class="title-link">
                            <a href="{{ route('properties-home') }}">All Properties
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            
            @if (count($properties) >= 3)
                <div id="new-carousel" class="owl-carousel owl-theme">
                    <div class="carousel-item-c">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('uploads/' . $properties[0]->pictures[0]) }}" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="{{ route('single', $properties[0]->id) }}" class="category-b">Details
                                            | GH₵‎ {{ $properties[0]->price }} </a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="{{ route('single', $properties[0]->id) }}">{{ $properties[0]->title }}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-c">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('uploads/' . $properties[1]->pictures[1]) }}" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="{{ route('single', $properties[1]->id) }}" class="category-b">Details
                                            | GH₵‎ {{ $properties[1]->price }} </a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="{{ route('single', $properties[1]->id) }}">
                                                {{ $properties[1]->title }} </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-c">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('uploads/' . $properties[2]->pictures[2]) }}" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="{{ route('single', $properties[2]->id) }}" class="category-b">Details
                                            | GH₵‎ {{ $properties[2]->price }}</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a
                                                href="{{ route('single', $properties[2]->id) }}">{{ $properties[2]->title }}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>No Properties Yet, Note properties must be three or more before I can disply for you</p>
            @endif

        </div>
    </section>
    <!--/ News End /-->

    <!--/ Testimonials Star /-->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="img/test2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        The goal is PayLater. My company fired me just before I had to renew my lease
                                        for another two years. I nearly lost my sanity due to disappointment from
                                        friends and family. I contacted Paylater and they enrolled me on Paylater policy
                                        to cover my GH 5000 rent. I made weekly payments, and my family and I are now
                                        Happy.
                                    </p>
                                    My family and I are greateful.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="img/test1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        I lost more than GH₵60000 ($4959.00) to real estate agents in 2020.
                                        Unfortunately, once they sold me unlicensed land, I began to build. Soon after,
                                        the lands commission requested my permit, which I lacked. I was devastated.
                                        I purchased a  piece of land from paylater, and as a result, I have reached the
                                        ceiling. Since I purchased it, no one has approached me.Thanks to the team
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonials End /-->

    <!--/ footer Star /-->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">House Agency</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                Our consumers can purchase, rent, or credit our properties. When you conduct business
                                with us, we promise you complete piece of mind.
                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <span class="color-text-a">Phone: </span> +233 240994061
                                </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email: </span>customer.rentmann@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="">Properties</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a
                                            href="{{ route('contact') }}">Contacts</a>
                                    </li>
                                    <li class="item-list-a">

                                    </li>
                                    <li class="item-list-a">

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">Regions Covered In Ghana</h3>
                        </div>
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a
                                        href="{{ route('properties-home') }}">Greater Accra Region</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection