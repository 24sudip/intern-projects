@extends('layouts.frontendMaster')

@section('content')
    <!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('blogger.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.page', $blog->category_id) }}">
                        {{ $blog->relation_to_category->category_name }}
                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->blog_title }}</li>
                </ol>
            </nav>

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{ $blog->blog_title }}</h1>
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
								<li class="list-inline-item"><a href="{{ route('category.page', $blog->category_id) }}">
                                    {{ $blog->relation_to_category->category_name }}</a></li>
								<li class="list-inline-item">{{ $blog->created_at->isoFormat('MMM Do YYYY') }}</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('upload/blog_photos') }}/{{ $blog->blog_photo }}" alt="post-title" />
						</div>
						<!-- post content -->
                        <style>
                            .ql-clipboard {
                                display: none;
                            }
                            .ql-tooltip {
                                display: none;
                            }
                        </style>
						<div class="post-conteynt clearfix">
							{!! $blog->blog_detail !!}
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
                                @php
                                    $tag_invents = App\Models\TagInventory::where('blog_id',$blog->id);
                                @endphp
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
                                    @foreach ($tag_invents as $tag_invent)
                                    <a href="#" class="tag">{{ $tag_invent->relation_to_tag->tag_name }}</a>
                                    @endforeach
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>

					<div class="spacer" data-height="50"></div>

					<div class="about-author padding-30 rounded">
						<div class="thumb">
                            @if ($blog->relation_to_user->profile_photo)
                            <img width="100" src="{{ asset('upload/profile_photos') }}/{{ $blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                            @else
                            <img width="100" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                            @endif
						</div>
						<div class="details">
							<h4 class="name"><a href="#">{{ $blog->relation_to_user->name }}</a></h4>
							<p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
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
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Comments (3)</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							<!-- comment item -->
							<li class="comment rounded">
								<div class="thumb">
									<img src="{{ asset('frontend_assets') }}/images/other/comment-1.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="#">John Doe</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut tortor fringilla cursus sed quis odio.</p>
									<a href="#" class="btn btn-default btn-sm">Reply</a>
								</div>
							</li>
							<!-- comment item -->
							<li class="comment child rounded">
								<div class="thumb">
									<img src="{{ asset('frontend_assets') }}/images/other/comment-2.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="#">Helen Doe</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="spacer" data-height="50"></div>
                    @auth()
					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Leave Comment</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">
						<form id="comment-form" class="comment-form" method="post">
							<div class="messages"></div>
							<div class="row">
								<div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
										<textarea name="InputComment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
						</form>
					</div>
                    @endauth
                </div>
				<div class="col-lg-4">
					@include('frontend.Sidebar')
				</div>
			</div>
		</div>
	</section>
@endsection
