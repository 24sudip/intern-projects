{{--  --}}
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from themeger.shop/html/katen/html/personal-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:32:12 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets') }}/images/favicon.png">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-personal light">
        <div class="container-xl header-top">
			<div class="row align-items-center">

				<div class="col-4 d-none d-md-block d-lg-block">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
				<!-- site logo -->
					<a class="navbar-brand" href="personal-alt.html"><img src="{{ asset('frontend_assets') }}/images/other/avatar-lg.png" alt="logo" /></a>
					<a href="personal-alt.html" class="d-block text-logo">Katen<span class="dot">.</span></a>
					<span class="slogan d-block">Professional Writer & Personal Blogger</span>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- header buttons -->
					<div class="header-buttons float-md-end mt-4 mt-md-0">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button ms-2 float-end float-md-none">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>

			</div>
        </div>

		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">

				<div class="collapse navbar-collapse justify-content-center centered-nav">
					<!-- menus -->
					<ul class="navbar-nav">
						@include('frontend.NavItem')
					</ul>
				</div>

			</div>
		</nav>
	</header>

    <!-- section hero -->
    <section class="hero data-bg-image d-flex align-items-center" data-bg-image="{{ asset('frontend_assets') }}/images/other/hero.jpg">
        <div class="container-xl">
            <!-- call to action -->
            <div class="cta text-center">
                <h2 class="mt-0 mb-4">I'm Katen Doe.</h2>
                <p class="mt-0 mb-4">Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
                <a href="#" class="btn btn-light mt-2">About Me</a>
            </div>
        </div>
        <!-- animated mouse wheel -->
        <span class="mouse">
            <span class="wheel"></span>
        </span>
        <!-- wave svg -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260"><path fill="#FFF" fill-opacity="1" d="M0,256L60,245.3C120,235,240,213,360,218.7C480,224,600,256,720,245.3C840,235,960,181,1080,176C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>

	<!-- section main content -->
	<section class="main-content mt-5">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-1.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Become Better With Building In 1 Month</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-2.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Most Important Thing You Need To Know About Swim</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-3.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">The Secrets To Finding Class Tools For Your Dress</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                    <span class="post-format">
                                        <i class="icon-camrecorder"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-4.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How I Improved My Fashion Style In One Day</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Trending</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-5.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-6.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Wondering How To Make Your Hair Style Rock?</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">How To</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-7.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Make More Construction By Doing Less</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Culture</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-8.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-9.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                    <span class="post-format">
                                        <i class="icon-earphones"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="{{ asset('frontend_assets') }}/images/posts/post-md-10.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend_assets') }}/images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Now You Can Have Your Thoughts Done Safely</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

					<nav>
						<ul class="pagination justify-content-center">
							<li class="page-item active" aria-current="page">
								<span class="page-link">1</span>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4">
					@include('frontend.Sidebar')
				</div>
			</div>
		</div>
	</section>

@include('frontend.Footer')
