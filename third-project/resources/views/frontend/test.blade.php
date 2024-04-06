<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ ->format('d/m/Y') }}
    {{ ->isoFormat('MMM Do YYYY') }}
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
    <div class="blog_details">
        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same <a href="#">vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>

        <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p>

        <figure class="figure">
            <img src="{{ asset('frontend_assets') }}/images/posts/post-lg-2.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
        </figure>

        <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable.</p>

        <img src="{{ asset('frontend_assets') }}/images/posts/single-sm-1.jpg" class="rounded alignleft" alt="...">
        <p>One could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

        <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing <a href="#">European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>

        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>

        <h4>I should be incapable of drawing a single stroke</h4>

        <ul>
            <li>How about if I sleep a little bit</li>
            <li>A collection of textile samples lay spread out</li>
            <li>His many legs, pitifully thin compared with</li>
            <li>He lay on his armour-like back</li>
            <li> Gregor Samsa woke from troubled dreams</li>
        </ul>

        <p>To an English person, it will seem like simplified <a href="#">English</a>, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
    </div>
    <div class="column col-md-6">
        <!-- Email input -->
        <div class="form-group">
            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required">
        </div>
    </div>
    <div class="column col-md-6">
        <!-- Name input -->
        <div class="form-group">
            <input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Website" required="required">
        </div>
    </div>
    <div class="column col-md-12">
        <!-- Email input -->
        <div class="form-group">
            <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name" required="required">
        </div>
    </div>
    <!-- comment item -->
    <li class="comment rounded">
        <div class="thumb">
            <img src="{{ asset('frontend_assets') }}/images/other/comment-3.png" alt="John Doe" />
        </div>
        <div class="details">
            <h4 class="name"><a href="#">Anna Doe</a></h4>
            <span class="date">Jan 08, 2021 14:41 pm</span>
            <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
            <a href="#" class="btn btn-default btn-sm">Reply</a>
        </div>
    </li>
</body>
</html>
