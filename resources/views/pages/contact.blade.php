@extends('layout')


@section('content')
     <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Contact US</h1>
                        <span class="color-text-a">Our office is located at No. 1 University Avenue in McCarthy. Email us
                            at eassymanAdmin@paylater.org or call us directly at +233 240994061.</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31768.13255201636!2d-0.3158785320684315!3d5.564561141788641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf981a8975e7bb%3A0xc4d4487298accf44!2sMcCarthy%20Hill%2C%20Mallam!5e0!3m2!1sen!2sgh!4v1671177025780!5m2!1sen!2sgh"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            <form method="POST" action="{{route('add')}}">
                              @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputContent">Content</label>

                                    <textarea name="content" class="form-control" id="" cols="5" rows="5"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-a">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-paper-plane"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Say Hello</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email us :
                                            <span class="color-a">customer.rentmann@gmail.com</span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a">+233 240994061</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-pin"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Find us in</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            No 1 University Avenue, MacCarthy-Hill,Accra-Ghana
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-redo"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-a">
                                            <ul class="list-inline">
                                              <li class="list-inline-item">
                                                <a href="https://www.facebook.com/profile.php?id=100090762706554&mibextid=LQQJ4d
                                                ">
                                                  <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                              </li>
                                              <li class="list-inline-item">
                                                <a href="https://twitter.com/rentmannglobal?s=11&t=KUjbO1yAsumHzeY4gOZEEw
                                                ">
                                                  <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                              </li>
                                              <li class="list-inline-item">
                                                <a href="https://instagram.com/rentmannglobal?igshid=YmMyMTA2M2Y=
                                                ">
                                                  <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection