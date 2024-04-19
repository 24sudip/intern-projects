<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from themeger.shop/html/katen/html/minimal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:32:48 GMT -->
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

    <div class="container-xl">
        <!-- header -->
        <header class="header-minimal">

            <div class="row align-items-center">

                <div class="col-4">
                    <button class="burger-menu icon-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>

                <div class="col-4 text-center">
                    <!-- site logo -->
                    <a class="navbar-brand" href="{{ route('admin.page') }}"><img src="{{ asset('frontend_assets') }}/images/logo.svg" alt="logo" /></a>
                </div>

                <div class="col-4">
                    <button class="search icon-button float-end">
                        <i class="icon-magnifier"></i>
                    </button>
                </div>

            </div>

        </header>
    </div>

	<!-- section main content -->
	<section class="main-content-lg">
        <div class="container-minimal">
            <!-- post -->
            @foreach ($minimal_blogs as $minimal_blog)
            <div class="post post-xl">
                @php
                    $comments = App\Models\Comment::where('blog_id',$minimal_blog->relation_to_blog->id)->count();
                @endphp
                <!-- top section -->
                <div class="post-top">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('personal.page',$minimal_blog->relation_to_blog->blogger_id) }}">
                                @if ($minimal_blog->relation_to_blog->relation_to_user->profile_photo)
                                <img src="{{ asset('upload/profile_photos') }}/{{ $minimal_blog->relation_to_blog->relation_to_user->profile_photo }}" class="author"
                                alt="author" width="40"/>
                                @else
                                <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                @endif
                                {{ $minimal_blog->relation_to_blog->relation_to_user->name }}
                            </a>
                        </li>
                        <li class="list-inline-item">{{ $minimal_blog->relation_to_blog->created_at->format('d M Y') }}</li>
                        <li class="list-inline-item"><i class="icon-bubble"></i> ({{ $comments }})</li>
                    </ul>
                    <h5 class="post-title mb-0 mt-4">
                        <a href="{{ route('blog.details',$minimal_blog->relation_to_blog->id) }}">
                            {{ $minimal_blog->relation_to_blog->blog_title }}
                        </a>
                    </h5>
                </div>
                <!-- thumbnail -->
                <div class="thumb rounded">
                    <a href="{{ route('category.page',$minimal_blog->relation_to_blog->category_id) }}" class="category-badge lg position-absolute">{{ $minimal_blog->relation_to_blog->relation_to_category->category_name }}</a>
                    @if ($minimal_blog->relation_to_blog->blog_icon)
                    <span class="post-format">
                        <i class="{{ $minimal_blog->relation_to_blog->blog_icon }}"></i>
                    </span>
                    @else
                    <span class="post-format">
                        <i class="icon-user"></i>
                    </span>
                    @endif
                    <a href="{{ route('blog.details', $minimal_blog->relation_to_blog->id) }}">
                        <div class="inner">
                            <img src="{{ asset('upload/blog_photos') }}/{{ $minimal_blog->relation_to_blog->blog_photo }}" alt="post-title" />
                        </div>
                    </a>
                </div>
                <!-- details -->
                <div class="details">
                    <p class="excerpt mb-0">{{ $minimal_blog->relation_to_blog->blog_intro }}</p>
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
                    <div class="float-end d-none d-md-block">
                        <a href="{{ route('blog.details',$minimal_blog->relation_to_blog->id) }}" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="more-button d-block d-md-none float-end">
                        <a href="{{ route('blog.details',$minimal_blog->relation_to_blog->id) }}"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- pagination -->
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
	</section>

@include('frontend.Footer')
