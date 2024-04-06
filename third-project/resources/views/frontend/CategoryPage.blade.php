{{--  --}}
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themeger.shop/html/katen/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:32:51 GMT -->
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
	<header class="header-personal">
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
					<a class="navbar-brand" href="personal.html"><img src="{{ asset('frontend_assets') }}/images/other/avatar-lg.png" alt="logo" /></a>
					<a href="personal.html" class="d-block text-logo">Katen<span class="dot">.</span></a>
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

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{ $category->category_name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('blogger.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->category_name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="row gy-4">
                        @foreach ($blogs as $blog)
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="#" class="category-badge position-absolute">
                                        {{ $category->category_name }}
                                    </a>
                                    @if ($blog->blog_icon)
                                    <span class="post-format">
                                        <i class="{{ $blog->blog_icon }}"></i>
                                    </span>
                                    @else
                                    <span class="post-format">
                                        <i class="icon-user"></i>
                                    </span>
                                    @endif
                                    <a href="{{ route('blog.details', $blog->id) }}">
                                        <div class="inner">
                                            <img src="{{ asset('upload/blog_photos') }}/{{ $blog->blog_photo }}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                @if ($blog->relation_to_user->profile_photo)
                                                <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                                @else
                                                <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                                @endif
                                                {{ $blog->relation_to_user->name }}
                                            </a>
                                        </li>
                                        <li class="list-inline-item">{{ $blog->created_at->format('d/m/Y') }}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a></h5>
                                    <p class="excerpt mb-0">{{ $blog->blog_intro }}</p>
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
                                        <a href="{{ route('blog.details', $blog->id) }}"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
