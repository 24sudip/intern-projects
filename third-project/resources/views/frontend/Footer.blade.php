	<!-- instagram feed -->
	<div class="instagram">
		<div class="container-xl">
			<!-- button -->
			<a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
			<!-- images -->
			<div class="instagram-feed d-flex flex-wrap">
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-1.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-2.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-3.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-4.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-5.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="{{ asset('frontend_assets') }}/images/insta/insta-6.jpg" alt="insta-title" />
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Press ESC to close</h3>
		</div>
		<!-- form -->
		<form class="d-flex search-form" action="{{ route('search.result') }}" method="POST">
            @csrf
			<input class="form-control me-2" type="text" name="search_text" placeholder="Search and press enter ...">
			<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
		</form>
	</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="{{ asset('frontend_assets') }}/images/logo.svg" alt="Katen" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a href="{{ route('blogger.home') }}">Home</a>
				<ul class="submenu">
					<li><a href="{{ route('all.blog') }}">All Blogs</a></li>
				</ul>
			</li>
			<li class="active">
                <a href="#">Category</a>
                @php
                    $categories = App\Models\Category::get(['id', 'category_name']);
                @endphp
                <ul class="submenu">
                    @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('category.page',$category->id) }}">
                            {{ $category->category_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @auth()
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            @else
            <li><a href="{{ url('/login') }}">Login</a></li>
            @endauth
			<li>
				<a href="#">Pages</a>
				<ul class="submenu">
					<li><a href="{{ route('minimal.page') }}">Minimal</a></li>
                    <li><a href="{{ route('classic.page') }}">Classic</a></li>
				</ul>
			</li>
			<li><a href="{{ route('about') }}">About</a></li>
			<li><a href="{{ route('contact') }}">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>

<!-- JAVA SCRIPTS -->
<script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/slick.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/jquery.sticky-sidebar.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/custom.js"></script>

</body>

<!-- Mirrored from themeger.shop/html/katen/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 05:32:47 GMT -->
</html>
