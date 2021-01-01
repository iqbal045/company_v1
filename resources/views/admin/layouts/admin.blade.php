<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

    <!-- All css -->
    @include('admin.layouts.includes.all-css')
    <!-- style -->
    @yield('style')

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<body>
<!-- Header start-->
@include('admin.layouts.includes.header')
<!-- Header end-->

<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.layouts.includes.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">@yield('title')</h2>
            </div>
        </div>
        {{-- Content Section --}}
        <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        <!-- footer -->
        @include('admin.layouts.includes.footer')
    </div>
</div>

<!-- All js -->
@include('admin.layouts.includes.all-js')
<!-- script -->
@yield('script')

</body>
</html>
