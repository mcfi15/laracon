@extends('layouts.front')

@section('title', $appSetting->meta_title)

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            @foreach ($sliders as $key => $slider)
            <div class="header-carousel-item {{ $key == 0 ? 'active':'' }}">
                <div class="header-carousel-item-img-1">
                    <img src="{{ asset("$slider->image") }}" class="img-fluid w-100" style="height:650px !important;" alt="Image">
                </div>
                <div class="carousel-caption">
                    <div class="carousel-caption-inner text-start p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">{{ $slider->title }}</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">{{ $slider->description }}
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ url('apply') }}">Apply Now</a>
                        <a class="btn btn-dark rounded-pill py-3 px-5 mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ url('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <!-- Carousel End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    {{-- <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4"> Offering the Best Consulting & Investa Services</h1> --}}
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded">
                            <div class="service-img">
                                <img src="img/service-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"><i class="fas fa-calendar-check fa-2x me-2"></i>{{ $appSetting->exp }}  YEARS OF EXPERIENCE</a>
                                    <p class="mb-4">We have over {{ $appSetting->exp }} years of Experience when it comes to electrical and engineering affairs.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded">
                            <div class="service-img">
                                <img src="img/service-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"><i class="fas fa-users fa-2x me-2"></i> INDUSTRY EXPERTS</a>
                                    <p class="mb-4">Of the thousands of applicants only the most skilled engineers are selected for our organisation
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded">
                            <div class="service-img">
                                <img src="img/service-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"><i class="fas fa-restroom fa-2x me-2"></i> TEAMWORK</a>
                                    <p class="mb-4">Our team works together to create positive work environments for our customer
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item bg-light rounded">
                            <div class="service-img">
                                <img src="img/service-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start"><i class="fas fa-donate fa-2x me-2"></i> OPPORTUNITY</a>
                                    <p class="mb-4">We are global. Our experts travel overseas to interview & screen candidates
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-img">
                            <img src="{{ asset('uploads/about/about1.jpg') }}" class="img-fluid w-100 rounded-top bg-white" alt="Image">
                            <img src="{{ asset('uploads/about/about2.jpg') }}" class="img-fluid w-100 rounded-bottom" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">About Us</h4>
                        <h1 class="display-5 mb-4">We Deliver Quality Services Worldwide.</h1>
                        <p class="text ps-4 mb-4">MD A & A Electrical $ Engineering is a Malaysia company whose existence is premised upon the need for distribution and supplies of industrial materials and as one of the home of the largest direct marketers and premier distributors of industrial materials, Electrical Appliances, Metalworking and Maintenance, workshop tools, Lubricants, Chemicals, Cleaning and maintenance chemicals to industrial customers in Malaysia. MD A & A Electrical $ Engineering Supplies Nigeria employs one of the industry's largest sales forces and distributes over 100,000 industrial products from over 100 suppliers to our growing list of customers.
                        </p>
                        <div class="row g-4 justify-content-between mb-5">
                            <div class="col-lg-6 col-xl-5">
                                <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Strategy & Consulting</p>
                                <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Business Process</p>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Marketing Rules</p>
                                <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Partnerships</p>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-between mb-5">
                            <div class="col-xl-5"><a href="#" class="btn btn-primary rounded-pill py-3 px-5">Discover More</a></div>
                            <div class="col-xl-7 mb-5">
                                <div class="about-customer d-flex position-relative">
                                    <img src="{{ asset('assets/front/img/customer-img-1.jpg') }}" class="img-fluid btn-xl-square position-absolute" style="left: 0; top: 0;"  alt="Image">
                                    <img src="{{ asset('assets/front/img/customer-img-2.jpg') }}" class="img-fluid btn-xl-square position-absolute" style="left: 45px; top: 0;" alt="Image">
                                    <img src="{{ asset('assets/front/img/customer-img-3.jpg') }}" class="img-fluid btn-xl-square position-absolute" style="left: 90px; top: 0;" alt="Image">
                                    <img src="{{ asset('assets/front/img/customer-img-1.jpg') }}" class="img-fluid btn-xl-square position-absolute" style="left: 135px; top: 0;" alt="Image">
                                    <div class="position-absolute text-dark" style="left: 220px; top: 10px;">
                                        <p class="mb-0">Thousand+ Trusted</p>
                                        <p class="mb-0">Global Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center">
                            <div class="col-sm-4">
                                <div class="bg-primary rounded p-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">{{ $appSetting->products }}</span>
                                        <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">k+</h4>
                                    </div>
                                    <div class="w-100 d-flex align-items-center justify-content-center">
                                        <p class="text-white mb-0">Products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bg-dark rounded p-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="counter-value fs-1 fw-bold text-white" data-toggle="counter-up">{{ $appSetting->clients }}</span>
                                        <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                    </div>
                                    <div class="w-100 d-flex align-items-center justify-content-center">
                                        <p class="mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bg-primary rounded p-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">{{ $appSetting->emp }}</span>
                                        <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                    </div>
                                    <div class="w-100 d-flex align-items-center justify-content-center">
                                        <p class="text-white mb-0">Employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    {{-- <h4 class="text-primary">Our Blogs</h4> --}}
                    <h1 class="display-4">Why Work With Us?</h1>
                </div>
                <div class="row justify-content-center">
                    <p class="text-center ps-4 mb-4">MD A & A Electrical $ Engineering is an association of engineering experts, with over {{ $appSetting->exp }} years of experience in the market.</p>
                    <p class="text-center ps-4 mb-4">Since its inception, our philosophy is one of partnership where we all work together to create a positive relationship between our workers and customers.</p>
                    <p class="text-center ps-4 mb-4">We have provided our clients with good products, superior personnel. Of the thousands of applicants only the most skilled empl are selected which means superior work experience for the MD customers.</p>

                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="h-100 rounded">
                            <center><img src="{{ asset('uploads/img/ssm.png') }}" width="120" height="50" alt="">
                            <br>
                            <b>NO. PENDAFTARAN: 202203298014 (LA0052459-A)
                            </b>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Project Start -->
        <div class="container-fluid project">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    {{-- <h4 class="text-primary">What we offer</h4> --}}
                    <h1 class="display-4">What we offer</h1>
                </div>
                <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach($offers as $offer)
                    <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="project-img">
                            <img src="{{ asset($offer->image) }}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="project-content bg-light rounded p-4">
                            <div class="project-content-inner">
                                <div class="project-icon mb-3"><i class="fas fa-chart-line fa-4x text-primary"></i></div>
                                <p class="text-dark fs-5 mb-3">{{ $offer->name }}</p>
                                <a href="#" class="h4">{{ $offer->description }}</a>
                                {{-- <div class="pt-4">
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
                
            </div>
        </div>
        <!-- Project End -->

    
@endsection