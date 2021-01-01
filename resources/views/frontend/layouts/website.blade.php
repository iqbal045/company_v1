<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <!-- Place favicon.ico -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/img/icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/img/icon.png') }}">

    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">

    <!-- all css -->
    @include('frontend.layouts.includes.all-css')
    <!-- style -->
    @yield('style')

    <title>{{ config('app.name', 'Company_v1.0') }}</title>

</head>
<body class="antialiased">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- body start -->
<!-- preloader -->
<div class="spinner-section">
    <div class="spin-cell">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- // end preloader -->
<!-- header -->
@include('frontend.layouts.includes.header')
<!-- // end header -->

@yield('content')

<!-- footer -->
@include('frontend.layouts.includes.footer')
<!-- // end footer -->

<!-- // all js -->
@include('frontend.layouts.includes.all-js')
<!-- script -->
@yield('script')

</body>
</html>
