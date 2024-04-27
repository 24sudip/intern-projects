<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from themeger.shop/html/katen/html/personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:32:47 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen </title>
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
					<a class="navbar-brand" href="#"><img src="{{ asset('frontend_assets') }}/images/other/avatar-lg.png" alt="logo" /></a>
					<a href="#" class="d-block text-logo">Katen<span class="dot">.</span></a>
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

    <section class="hero-carousel">
        <div class="row post-carousel-featured post-carousel">
            <!-- post -->
            @foreach($group_blogs as $group_blog)
            <div class="post featured-post-md">
                <div class="details clearfix">
                    <a href="{{ route('category.page', $group_blog->relation_to_blog->category_id) }}" class="category-badge">
                        {{ $group_blog->relation_to_blog->relation_to_category->category_name }}</a>
                    <h4 class="post-title">
                        <a href="{{ route('blog.details', $group_blog->relation_to_blog->id) }}">
                            {{ $group_blog->relation_to_blog->blog_title }}
                        </a>
                    </h4>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('personal.page',$group_blog->relation_to_blog->blogger_id) }}">
                            {{ $group_blog->relation_to_blog->relation_to_user->name }}</a>
                        </li>
                        <li class="list-inline-item">{{ $group_blog->relation_to_blog->created_at->format('d M Y') }}</li>
                    </ul>
                </div>
                <a href="{{ route('blog.details', $group_blog->relation_to_blog->id) }}">
                    <div class="thumb rounded">
                        <div class="inner data-bg-image"
                        data-bg-image="{{ asset('upload/blog_photos') }}/{{ $group_blog->relation_to_blog->blog_photo }}"></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="row gy-4">
                        @foreach($blogs as $blog)
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">{{ $blog->relation_to_category->category_name }}</a>
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
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('upload/profile_photos') }}/{{ $user->profile_photo }}" class="author" alt="author" width="40"/>{{ $user->name }}</a></li>
                                        <li class="list-inline-item">{{ $blog->created_at->format('d M Y') }}</li>
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

					{{ $blogs->onEachSide(1)->links() }}

				</div>
				<div class="col-lg-4">
					@include('frontend.Sidebar')
				</div>
			</div>
		</div>
	</section>
@include('frontend.Footer')
