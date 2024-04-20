<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="{{ route('blogger.home') }}">Home</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('all.blog') }}">All Blogs</a></li>
    </ul>
</li>
@auth()
<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ url('/login') }}">Login</a>
</li>
@endauth
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="">Category</a>
    @php
        $categories = App\Models\Category::get(['id', 'category_name']);
    @endphp
    <ul class="dropdown-menu">
        @foreach ($categories as $category)
        <li>
            <a class="dropdown-item" href="{{ route('category.page',$category->id) }}">
                {{ $category->category_name }}
            </a>
        </li>
        @endforeach
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('about') }}">About</a>
</li>
<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="index.html">Pages</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('minimal.page') }}">Minimal</a></li>
        <li><a class="dropdown-item" href="{{ route('classic.page') }}">Classic</a></li>
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
</li>
