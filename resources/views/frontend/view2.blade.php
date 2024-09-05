@extends('layouts.front')

@section('title', $product->title.' | Single View')

@section('meta_title', $product->meta_title)

@section('meta_description', $product->meta_description)

@section('meta_keywords', $product->meta_keywords)

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $product->title }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">{{ $product->title }}</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
</div>
<!-- Navbar & Hero End -->

@include('layouts.inc.frontend.searchbar')

<div>
    <livewire:frontend.product.view :category="$category" :product="$product" />
</div>

@endsection