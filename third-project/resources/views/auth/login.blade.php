{{--  --}}
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">


<!-- Mirrored from myrathemes.com/dashtrap/pages-login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 03:40:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('dashboard_assets') }}/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{ asset('dashboard_assets') }}/js/config.js"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a class='logo-dark' href='index.html'>
                                <span><img src="{{ asset('dashboard_assets') }}/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a class='logo-light' href='index.html'>
                                <span><img src="{{ asset('dashboard_assets') }}/images/logo-light.png" alt="" height="22"></span>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="form-label" for="email">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" placeholder="Enter your email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <a class='text-muted float-end' href='pages-recoverpw.html'><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50"> <a class='text-white-50 ms-1' href='pages-register.html'>Forgot your password?</a></p>
                        <p class="text-white-50">Don't have an account? <a class='text-white font-weight-medium ms-1'
                            href='{{ url('/register') }}'>Sign Up</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <!-- App js -->
    <script src="{{ asset('dashboard_assets') }}/js/vendor.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/app.js"></script>

</body>


<!-- Mirrored from myrathemes.com/dashtrap/pages-login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 03:40:33 GMT -->
</html>
