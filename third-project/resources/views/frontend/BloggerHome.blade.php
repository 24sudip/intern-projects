@extends('layouts.frontendMaster')

@section('content')
	<!-- hero section -->
	<section id="hero">

		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- featured post large -->
					<div class="post featured-post-lg">
						<div class="details clearfix">
							<a href="{{ route('category.page', $featured_blog->category_id) }}" class="category-badge">
                                {{ $featured_blog->relation_to_category->category_name }}
                            </a>
							<h2 class="post-title"><a href="{{ route('blog.details', $featured_blog->id) }}">
                                {{ $featured_blog->blog_title }}</a></h2>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="{{ route('personal.page', $featured_blog->blogger_id) }}">
                                    {{ $featured_blog->relation_to_user->name }}</a></li>
								<li class="list-inline-item">{{ $featured_blog->created_at->format('d M Y') }}</li>
							</ul>
						</div>
						<a href="{{ route('blog.details', $featured_blog->id) }}">
							<div class="thumb rounded">
								<div class="inner data-bg-image"
                                data-bg-image="{{ asset('upload/blog_photos') }}/{{ $featured_blog->blog_photo }}"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4">

					<!-- post tabs -->
					<div class="post-tabs rounded bordered">
						<!-- tab navs -->
						<ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
							<li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
							<li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
						</ul>
						<!-- tab contents -->
						<div class="tab-content" id="postsTabContent">
							<!-- loader -->
							<div class="lds-dual-ring"></div>
							<!-- popular posts -->
							<div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
                                @foreach ($popular_blogs as $popular_blog)
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<a href="{{ route('blog.details', $popular_blog->id) }}">
											<div class="inner">
												<img src="{{ asset('upload/blog_photos') }}/{{ $popular_blog->blog_photo }}" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0">
                                            <a href="{{ route('blog.details', $popular_blog->id) }}">
                                                {{ $popular_blog->blog_title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ $popular_blog->created_at->format('d M Y') }}</li>
										</ul>
									</div>
								</div>
                                @endforeach
							</div>
							<!-- recent posts -->
							<div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                                @foreach ($recent_blogs as $recent_blog)
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<a href="{{ route('blog.details', $recent_blog->id) }}">
											<div class="inner">
												<img src="{{ asset('upload/blog_photos') }}/{{ $recent_blog->blog_photo }}" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="{{ route('blog.details', $recent_blog->id) }}">
                                            {{ $recent_blog->blog_title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ $recent_blog->created_at->format('d M Y') }}</li>
										</ul>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Editor’s Pick</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
							<div class="col-sm-6">
								<!-- post -->
								<div class="post">
									<div class="thumb rounded">
										<a href="{{ route('category.page', $first_editor->relation_to_blog->category_id) }}" class="category-badge position-absolute">
                                            {{ $first_editor->relation_to_blog->relation_to_category->category_name }}</a>
										@if ($first_editor->relation_to_blog->blog_icon)
                                        <span class="post-format">
                                            <i class="{{ $first_editor->relation_to_blog->blog_icon }}"></i>
                                        </span>
                                        @else
                                        <span class="post-format">
                                            <i class="icon-user"></i>
                                        </span>
                                        @endif
										<a href="{{ route('blog.details',$first_editor->relation_to_blog->id) }}">
											<div class="inner">
												<img src="{{ asset('upload/blog_photos') }}/{{ $first_editor->relation_to_blog->blog_photo }}" alt="post-title" />
											</div>
										</a>
									</div>
									<ul class="meta list-inline mt-4 mb-0">
										<li class="list-inline-item">
                                            <a href="{{ route('personal.page', $first_editor->relation_to_blog->blogger_id) }}">
                                                @if ($first_editor->relation_to_blog->relation_to_user->profile_photo)
                                                <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $first_editor->relation_to_blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                                @else
                                                <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                                @endif
                                                {{ $first_editor->relation_to_blog->relation_to_user->name }}
                                            </a>
                                        </li>
										<li class="list-inline-item">
                                            {{ $first_editor->relation_to_blog->created_at->format('d M Y') }}</li>
									</ul>
									<h5 class="post-title mb-3 mt-3">
                                        <a href="{{ route('blog.details',$first_editor->relation_to_blog->id) }}">
                                        {{ $first_editor->relation_to_blog->blog_title }}
                                        </a>
                                    </h5>
									<p class="excerpt mb-0">{{ $first_editor->relation_to_blog->blog_intro }}</p>
								</div>
							</div>
							<div class="col-sm-6">
                                @php
                                    $editor_count = 1;
                                @endphp
								<!-- post -->
                                @foreach ($all_editors as $all_editor)
                                    @if ($editor_count > 1)
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="{{ route('blog.details', $all_editor->relation_to_blog->id) }}">
                                                <div class="inner">
                                                    <img src="{{ asset('upload/blog_photos') }}/{{ $all_editor->relation_to_blog->blog_photo }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="{{ route('blog.details', $all_editor->relation_to_blog->id) }}">
                                                    {{ $all_editor->relation_to_blog->blog_title }}
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">
                                                    {{ $all_editor->relation_to_blog->created_at->format('d M Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    <input type="hidden" value="{{ $editor_count++ }}">
                                @endforeach
							</div>
						</div>
					</div>
					<div class="spacer" data-height="50"></div>
					<!-- horizontal ads -->
					<div class="ads-horizontal text-md-center">
						<span class="ads-title">- Sponsored Ad -</span>
						<a href="#">
							<img src="{{ asset('frontend_assets') }}/images/ads/ad-750.png" alt="Advertisement" />
						</a>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Trending</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">
                        @php
                            $trending_first = 1;
                        @endphp
						<div class="row gy-5">
                            @foreach ($trending_tags as $trending_tag)
                                @if ($trending_first < 3)
                                <div class="col-sm-6">
                                    <!-- post large -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="{{ route('category.page',$trending_tag->relation_to_blog->category_id) }}" class="category-badge position-absolute">
                                                {{ $trending_tag->relation_to_blog->relation_to_category->category_name }}
                                            </a>
                                            @if ($trending_tag->relation_to_blog->blog_icon)
                                            <span class="post-format">
                                                <i class="{{ $trending_tag->relation_to_blog->blog_icon }}"></i>
                                            </span>
                                            @else
                                            <span class="post-format">
                                                <i class="icon-user"></i>
                                            </span>
                                            @endif
                                            <a href="{{ route('blog.details',$trending_tag->relation_to_blog->id) }}">
                                                <div class="inner">
                                                    <img src="{{ asset('upload/blog_photos') }}/{{ $trending_tag->relation_to_blog->blog_photo }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="{{ route('personal.page', $trending_tag->relation_to_blog->blogger_id) }}">
                                                    @if ($trending_tag->relation_to_blog->relation_to_user->profile_photo)
                                                    <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $trending_tag->relation_to_blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                                    @else
                                                    <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                                    @endif
                                                    {{ $trending_tag->relation_to_blog->relation_to_user->name }}
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                {{ $trending_tag->relation_to_blog->created_at->format('d M Y') }}</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="{{ route('blog.details',$trending_tag->relation_to_blog->id) }}">
                                                {{ $trending_tag->relation_to_blog->blog_title }}
                                            </a>
                                        </h5>
                                        <p class="excerpt mb-0">{{ $trending_tag->relation_to_blog->blog_intro }}</p>
                                    </div>
                                </div>
                                @endif
                                <input type="hidden" value="{{ $trending_first++ }}">
                            @endforeach
						</div>
                        @php
                            $trending_second = 1;
                        @endphp
                        <div class="row gy-5">
                            @foreach ($trending_tags as $trending_tag)
                                @if ($trending_second > 2)
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="{{ route('blog.details',$trending_tag->relation_to_blog->id) }}">
                                                <div class="inner">
                                                    <img src="{{ asset('upload/blog_photos') }}/{{ $trending_tag->relation_to_blog->blog_photo }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="{{ route('blog.details',$trending_tag->relation_to_blog->id) }}">
                                                {{ $trending_tag->relation_to_blog->blog_title }}
                                            </a>
                                        </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">
                                                    {{ $trending_tag->relation_to_blog->created_at->format('d M Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            <input type="hidden" value="{{ $trending_second++ }}">
                            @endforeach
                        </div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Inspiration</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
						<div class="slick-arrows-top">
							<button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
							<button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
						</div>
					</div>

					<div class="row post-carousel-twoCol post-carousel">
                        @foreach ($inspi_blogs as $inspi_blog)
						<!-- post -->
						<div class="post post-over-content col-md-6">
							<div class="details clearfix">
								<a href="{{ route('category.page', $inspi_blog->category_id) }}" class="category-badge">
                                    {{ $inspi_blog->relation_to_category->category_name }}
                                </a>
								<h4 class="post-title">
                                    <a href="{{ route('blog.details', $inspi_blog->id) }}">{{ $inspi_blog->blog_title }}</a>
                                </h4>
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item"><a href="{{ route('personal.page',$inspi_blog->blogger_id) }}">
                                        {{ $inspi_blog->relation_to_user->name }}</a></li>
									<li class="list-inline-item">{{ $inspi_blog->created_at->format('d M Y') }}</li>
								</ul>
							</div>
							<a href="{{ route('blog.details', $inspi_blog->id) }}">
								<div class="thumb rounded">
									<div class="inner">
										<img src="{{ asset('upload/blog_photos') }}/{{ $inspi_blog->blog_photo }}" alt="thumb" />
									</div>
								</div>
							</a>
						</div>
                        @endforeach
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Latest Posts</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">

						<div class="row">
                            @foreach ($recent_blogs as $recent_blog)
							<div class="col-md-12 col-sm-6">
								<!-- post -->
								<div class="post post-list clearfix">
									<div class="thumb rounded">
										@if ($recent_blog->blog_icon)
                                        <span class="post-format">
                                            <i class="{{ $recent_blog->blog_icon }}"></i>
                                        </span>
                                        @else
                                        <span class="post-format">
                                            <i class="icon-user"></i>
                                        </span>
                                        @endif
										<a href="{{ route('blog.details', $recent_blog->id) }}">
											<div class="inner">
												<img src="{{ asset('upload/blog_photos') }}/{{ $recent_blog->blog_photo }}" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details">
										<ul class="meta list-inline mb-3">
											<li class="list-inline-item">
                                                <a href="{{ route('personal.page', $recent_blog->blogger_id) }}">
                                                    @if ($recent_blog->relation_to_user->profile_photo)
                                                    <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $recent_blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                                    @else
                                                    <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                                    @endif
                                                    {{ $recent_blog->relation_to_user->name }}
                                                </a>
                                            </li>
											<li class="list-inline-item">
                                                <a href="{{ route('category.page',$recent_blog->category_id) }}">
                                                    {{ $recent_blog->relation_to_category->category_name }}
                                                </a>
                                            </li>
											<li class="list-inline-item">{{ $recent_blog->created_at->format('d M Y') }}</li>
										</ul>
										<h5 class="post-title">
                                            <a href="{{ route('blog.details', $recent_blog->id) }}">
                                                {{ $recent_blog->blog_title }}</a></h5>
										<p class="excerpt mb-0">{{ $recent_blog->blog_intro }}</p>
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
												<a href="{{ route('blog.details', $recent_blog->id) }}"><span class="icon-options"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div
						>
						<!-- load more button -->
						<div class="text-center">
							<a href="{{ route('all.blog') }}" class="btn btn-simple">Load More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
                    @include('frontend.Sidebar')
				</div>
			</div>
		</div>
	</section>
@endsection
