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
        <div class="accountbg" style="background: url('{{ asset('dashboard_assets') }}/images/bg-2.jpg');background-size: cover;"></div>

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

                                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="name">Full Name</label>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required="" placeholder="Enter Your Name">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="email">Email address</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" placeholder="john@deo.com">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
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
                                                    <label for="password">Confirm Password</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" placeholder="Confirm your password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-custom">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Already have an account?  <a href="{{ url('/login') }}" class="text-dark m-l-5"><b>Sign In</b></a></p>
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
