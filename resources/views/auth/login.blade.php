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
<div class="login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Admin Login</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="label-material"
                                    >{{ __('E-Mail Address') }}</label
                                    >
                                    <input
                                        id="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror input-material pt-0"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                    />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="login-password" class="label-material"
                                    >Password</label
                                    >
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror input-material pt-0"
                                        name="password"
                                        autocomplete="current-password"
                                    />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                               name="remember" id="remember" {{ old('remember') ?
                        'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" id="login" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form>
                            @if (Route::has('password.request'))
                                <a
                                    class="btn btn-link forgot-pass"
                                    href="{{ route('password.request') }}"
                                >
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p>
            2021 &copy; Your company. Developed by
            <a target="_blank" href="https://iqbal.live">IQBAL</a>.
        </p>
    </div>
</div>

<!-- JavaScript files-->
@include('admin.layouts.includes.all-js')

</body>
</html>
