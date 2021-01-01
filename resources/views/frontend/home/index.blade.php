@extends('frontend.layouts.website')

@section('content')

    <!-- banner section -->
    @include('frontend.home.includes.banner-section')
    <!-- // end banner section -->

    <!-- about section -->
    @include('frontend.home.includes.about-section')
    <!-- //end about section -->

    <!-- services section -->
    @include('frontend.home.includes.service-section')
    <!-- // end services section -->

    <!-- portfolio section -->
    @include('frontend.home.includes.portfolio-section')
    <!-- // end portfolio section -->

    <!-- team section -->
    @include('frontend.home.includes.team-section')
    <!-- // end team section -->

    <!-- video section -->
    @include('frontend.home.includes.video-section')
    <!-- // end video section -->

    <!-- testimonial section -->
    @include('frontend.home.includes.testimonial-section')
    <!-- // end testimonial section -->

    <!-- blog section -->
    @include('frontend.home.includes.blog-section')
    <!-- // end blog section -->

    <!-- getstart section -->
    @include('frontend.home.includes.getstart-section')
    <!-- // end getstart section -->

    <!-- contact section -->
    @include('frontend.home.includes.contact-section')
    <!-- // end contact section -->

@endsection
