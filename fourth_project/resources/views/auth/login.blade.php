{{--  --}}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('dashboard_assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('dashboard_assets') }}/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page account-page-full -->
        <div class="accountbg" style="background: url('{{ asset('dashboard_assets') }}/images/bg-1.jpg');background-size: cover;"></div>

        <div class="wrapper-page">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">

                                <div class="account-box">

                                    <div class="card-box p-5">
                                        <h2 class="text-uppercase text-center pb-4">
                                            <a href="index.html" class="text-success">
                                                <span><img src="{{ asset('dashboard_assets') }}/images/logo.png" alt="" height="26"></span>
                                            </a>
                                        </h2>

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="email">Email address</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" placeholder="Enter your email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    {{-- <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a> --}}
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" placeholder="Enter your password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-custom">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                        {{-- <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Remember me
                                                        </label> --}}
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Don't have an account? <a href="{{ url('/register') }}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="{{ asset('dashboard_assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/metisMenu.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/waves.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard_assets') }}/js/jquery.core.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/jquery.app.js"></script>

    </body>
</html>
