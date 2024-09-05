@extends('layouts.front')

@section('title', 'About page')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">What We Offer</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Offers</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

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

@endsection