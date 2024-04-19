<!-- sidebar -->
<div class="sidebar">
    <!-- widget about -->
    <div class="widget rounded">
        <div class="widget-about data-bg-image text-center" data-bg-image="{{ asset('frontend_assets') }}/images/map-bg.png">
            <img src="{{ asset('frontend_assets') }}/images/logo.svg" alt="logo" class="mb-4" />
            <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
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

    <!-- widget popular posts -->
    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title">Popular Posts</h3>
            <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
        </div>
        @php
            $popular_blogs = App\Models\Blog::orderBy('page_view','DESC')->limit(3)->get();
        @endphp
        <div class="widget-content">
            @foreach ($popular_blogs as $popular_blog)
            <!-- post -->
            <div class="post post-list-sm circle">
                <div class="thumb circle">
                    @php
                        $comments = App\Models\Comment::where('blog_id',$popular_blog->id)->count();
                    @endphp
                    <span class="number">{{ $comments }}</span>
                    <a href="{{ route('blog.details', $popular_blog->id) }}">
                        <div class="inner">
                            <img src="{{ asset('upload/blog_photos') }}/{{ $popular_blog->blog_photo }}" alt="post-title" />
                        </div>
                    </a>
                </div>
                <div class="details clearfix">
                    <h6 class="post-title my-0"><a href="{{ route('blog.details', $popular_blog->id) }}">
                        {{ $popular_blog->blog_title }}</a></h6>
                    <ul class="meta list-inline mt-1 mb-0">
                        <li class="list-inline-item">{{ $popular_blog->created_at->format('d M Y') }}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- widget categories -->
    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title">Explore Topics</h3>
            <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
        </div>
        <div class="widget-content">
            @php
                $categories = App\Models\Category::get(['id', 'category_name']);
            @endphp
            <ul class="list">
                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.page', $category->id) }}">{{ $category->category_name }}</a>
                    <span>
                        @php
                            $blog_num = App\Models\Blog::where('category_id',$category->id)->count();
                        @endphp
                        ({{ $blog_num }})
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- widget newsletter -->
    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title">Newsletter</h3>
            <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
        </div>
        <div class="widget-content">
            <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
            <form>
                <div class="mb-2">
                    <input class="form-control w-100 text-center" placeholder="Email address…" type="email">
                </div>
                <button class="btn btn-default btn-full" type="submit">Sign Up</button>
            </form>
            <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
        </div>
    </div>

    <!-- widget post carousel -->
    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title">Celebration</h3>
            <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
        </div>
        <div class="widget-content">
            @php
                $celebrateds = App\Models\GroupInventory::where('group_name','Celebration')->latest()->limit(3)->get();
            @endphp
            <div class="post-carousel-widget">
                @foreach ($celebrateds as $celebrated)
                <!-- post -->
                <div class="post post-carousel">
                    <div class="thumb rounded">
                        <a href="{{ route('category.page',$celebrated->relation_to_blog->category_id) }}" class="category-badge position-absolute">
                            {{ $celebrated->relation_to_blog->relation_to_category->category_name }}
                        </a>
                        <a href="{{ route('blog.details',$celebrated->relation_to_blog->id) }}">
                            <div class="inner">
                                <img src="{{ asset('upload/blog_photos') }}/{{ $celebrated->relation_to_blog->blog_photo }}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <h5 class="post-title mb-0 mt-4"><a href="{{ route('blog.details', $celebrated->relation_to_blog->id) }}">
                        {{ $celebrated->relation_to_blog->blog_title }}</a></h5>
                    <ul class="meta list-inline mt-2 mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('personal.page', $celebrated->relation_to_blog->blogger_id) }}">
                            {{ $celebrated->relation_to_blog->relation_to_user->name }}</a></li>
                        <li class="list-inline-item">{{ $celebrated->relation_to_blog->created_at->format('d M Y') }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <!-- carousel arrows -->
            <div class="slick-arrows-bot">
                <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <!-- widget advertisement -->
    <div class="widget no-container rounded text-md-center">
        <span class="ads-title">- Sponsored Ad -</span>
        <a href="#" class="widget-ads">
            <img src="{{ asset('frontend_assets') }}/images/ads/ad-360.png" alt="Advertisement" />
        </a>
    </div>

    <!-- widget tags -->
    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title">Tag Clouds</h3>
            <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
        </div>
        @php
            $tags = App\Models\Tag::get(['id','tag_name']);
        @endphp
        <div class="widget-content">
            @foreach ($tags as $tag)
            <a href="{{ route('tag.page', $tag->id) }}" class="tag">{{ $tag->tag_name }}</a>
            @endforeach
        </div>
    </div>

</div>
