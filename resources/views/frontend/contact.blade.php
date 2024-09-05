@extends('layouts.front')

@section('title', 'Contact page')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="contact-item">
                    <div class="pb-5">
                        <h4 class="text-primary">Contact Us</h4>
                        <h1 class="display-4 mb-4">Get In Touch With Us</h1>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i></div>
                        <div class="ms-4">
                            <h4>Addresses</h4>
                            <p class="mb-0">{{ $appSetting->address }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0">{{ $appSetting->phone }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0">{{ $appSetting->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                @include('layouts.alert.msg')
                <form action="post-message" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                        
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                            @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                <label for="message">Message</label>
                            </div>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&height=400&hl=en&q=NO%20G02,%20TINGKAT%20G,%20PANGSAPURI%20BESTARI,%20PERSIARAN%20KEMAJUAN,%20SEKSYEN%2016,%2040200%20SHAH%20ALAM%20SELANGOR+(Company%20Address)&t=&z=12&ie=UTF8&iwloc=B&output=embed"></iframe> <a href='https://www.acadoo-medizin.com/'>www.acadoo-medizin.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=629a16957dd80e24ea600dba674c089c6af0cdf6'></script>
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-bottom p-4">
                        <div class="d-flex">
                            <a class="btn btn-dark btn-lg-square rounded-circle me-2" href="{{ $appSetting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="{{ $appSetting->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="{{ $appSetting->instagram }}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="{{ $appSetting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Contact End -->


@endsection