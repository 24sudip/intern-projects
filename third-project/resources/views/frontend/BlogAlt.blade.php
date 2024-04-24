<!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
@extends('layouts.frontendMaster')

@section('content')
<!-- cover header -->
    <section class="single-cover data-bg-image" data-bg-image="{{ asset('upload/blog_photos') }}/{{ $blog->blog_photo }}">

        <div class="container-xl">

            <div class="cover-content post">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('blogger.home') }}">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('category.page', $blog->category_id) }}">
                            {{ $blog->relation_to_category->category_name }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->blog_title }}</li>
                    </ol>
                </nav>

                <!-- post header -->
                <div class="post-header">
                    <h1 class="title mt-0 mb-3">{{ $blog->blog_title }}</h1>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('personal.page', $blog->blogger_id) }}">
                                @if ($blog->relation_to_user->profile_photo)
                                <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $blog->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                @else
                                <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                @endif
                                {{ $blog->relation_to_user->name }}
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('category.page', $blog->category_id) }}">
                            {{ $blog->relation_to_category->category_name }}
                            </a>
                        </li>
                        <li class="list-inline-item">{{ $blog->created_at->isoFormat('MMM Do YYYY') }}</li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post content -->
                        <div class="post-conteynt pb-3">
                            {{ $blog->blog_intro }}
                        </div>
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
							<h4 class="name"><a href="{{ route('personal.page', $blog->blogger_id) }}">
                                {{ $blog->relation_to_user->name }}</a></h4>
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
						<h3 class="section-title">Comments ({{ $comments->count() }})</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							<!-- comment item -->
                            @foreach ($comments as $comment)
							<li class="comment rounded">
								<div class="thumb">
									@if ($comment->relation_to_user->profile_photo)
                                    <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $comment->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                    @else
                                    <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                    @endif
								</div>
								<div class="details">
									<h4 class="name"><a href="{{ route('personal.page', $comment->relation_to_user->id) }}">
                                        {{ $comment->relation_to_user->name }}</a></h4>
									<span class="date">{{ $comment->created_at->diffForHumans() }}</span>
									<p>{{ $comment->comment_text }}</p>
                                    @auth
                                    <a href="{{ route('reply.add', $comment->id) }}" class="btn btn-default btn-sm">Reply</a>
                                    @endauth
								</div>
							</li>
                                @php
                                    $replies = App\Models\Reply::where('comment_id', $comment->id)->get();
                                @endphp
                                @foreach ($replies as $reply)
                                <!-- reply item -->
                                <li class="comment child rounded">
                                    <div class="thumb">
                                        @if ($reply->relation_to_user->profile_photo)
                                        <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $reply->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                        @else
                                        <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                        @endif
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="{{ route('personal.page', $reply->relation_to_user->id) }}">
                                            {{ $reply->relation_to_user->name }}</a></h4>
                                        <span class="date">{{ $reply->created_at->diffForHumans() }}</span>
                                        <p>{{ $reply->reply_text }}</p>
                                    </div>
                                </li>
                                @php
                                    $second_replies = App\Models\SecondReply::where('reply_id',$reply->id)->get();
                                @endphp
                                    <!-- second_reply -->
                                    <ul class="comments ms-5">
                                        @foreach ($second_replies as $second_reply)
                                        <li class="comment child rounded">
                                            <div class="thumb">
                                                @if ($second_reply->relation_to_user->profile_photo)
                                                <img width="40" src="{{ asset('upload/profile_photos') }}/{{ $second_reply->relation_to_user->profile_photo }}" class="author" alt="author"/>
                                                @else
                                                <img width="40" src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}">
                                                @endif
                                            </div>
                                            <div class="details">
                                                <h4 class="name"><a href="{{ route('personal.page', $second_reply->relation_to_user->id) }}">
                                                    {{ $second_reply->relation_to_user->name }}</a></h4>
                                                <span class="date">{{ $second_reply->created_at->diffForHumans() }}</span>
                                                <p>{{ $second_reply->second_reply_text }}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            @endforeach
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
                        @if (session('Msg'))
                        <div class="alert alert-success">{{ session('Msg') }}</div>
                        @endif
						<form id="comment-form" class="comment-form" method="post"
                        action="{{ route('comment.store', $blog->id) }}">
                            @csrf
							<div class="messages"></div>
							<div class="row">
								<div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
                                        <input type="hidden" name="commentor_id" value="{{ Auth::id() }}">
										<textarea name="comment_text" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
						</form>
					</div>
                    @else
                    <div class="section-header">
						<h3 class="section-title">Login To Comment</h3>
						<img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
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
