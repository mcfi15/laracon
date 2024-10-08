<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="@yield('meta_title')">
        <meta content="" name="@yield('meta_keywords')">
        <meta content="" name="@yield('meta_description')">
        <meta content="Author" name="G7conet">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" type="image/png" href="{{ asset($appSetting->favicon) }}" />

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="{{ asset('assets/front/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/front/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
            
            @include('layouts.inc.frontend.navbar')

            @include('layouts.inc.frontend.searchbar')

            @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="mb-3">Get notified about new features & updates, news about latest community projects & events, new jobs oppurtunities and all our new products & discounts.</p>
                                <form action="{{ url('sub') }}" method="POST">
                                    @csrf
                                    <div class="position-relative mx-auto rounded-pill">
                                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" name="subemail" type="text" placeholder="Enter your email">
                                        @error('subemail')
                                            <div class="alert alert-danger">{{ $message }}</div>  
                                        @enderror
                                        <button type="submit" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="{{ url('/') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="{{ url('about') }}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="{{ url('offers') }}"><i class="fas fa-angle-right me-2"></i> Offers</a>
                            
                            <a href="{{ url('jobs') }}"><i class="fas fa-angle-right me-2"></i> Jobs</a>
                            <a href="{{ url('contact') }}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> {{ $appSetting->address }}</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> {{ $appSetting->email }}</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> {{ $appSetting->email2 }}</a>
                            <a href=""><i class="fas fa-phone me-2"></i> {{ $appSetting->phone }}</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> {{ $appSetting->phone2 }}</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href="{{ $appSetting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href="{{ $appSetting->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href="{{ $appSetting->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href="{{ $appSetting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item-post d-flex flex-column">
                            <h4 class="text-white mb-4">Reg Info</h4>
                            <div class="d-flex flex-column mb-3">
                                
                                <a href="#" class="text-body">NO. PENDAFTARAN: 202203298014 (LA0052459-A)</a>
                            </div>
                            {{-- <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Business</p>
                                <a href="#" class="text-body">Dimensional Fund Advisors Interview with Director</a>
                            </div>
                            <div class="footer-btn text-start">
                                <a href="#" class="btn btn-light rounded-pill px-4">View All Post <i class="fa fa-arrow-right ms-1"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><i class="fas fa-copyright text-light me-2"></i> 2024 {{ $appSetting->website_name }}, All right reserved.</span>
                    </div>
                    {{-- <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-primary" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-primary" href="https://themewagon.com">ThemeWagon</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/lightbox/js/lightbox.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script>
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
        alert(msg);
        }
    </script>

<script>
    ClassicEditor
    .create( document.querySelector( '#coverletter' ) )
    .then( editor => {
        editor.ui.view.editable.element.style.height = '200px';
    } )
    .catch( error => {
    console.error( error );
    });
  </script>


    @livewireScripts
    </body>

</html>