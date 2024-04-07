<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td>Blogger Name</td>
                            <td>{{ $blog->relation_to_user->name }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $blog->relation_to_category->category_name }}</td>
                        </tr>
                        <tr>
                            <td>Blog Title</td>
                            <td>{{ $blog->blog_title }}</td>
                        </tr>
                        <tr>
                            <td>Blog Thumbnail</td>
                            <td><img src="{{ asset('upload/blog_photos') }}/{{ $blog->blog_photo }}" alt="thumbnail"></td>
                        </tr>
                        <tr>
                            <td>Blog Introduction</td>
                            <td>{{ $blog->blog_intro }}</td>
                        </tr>
                        <tr>
                            <td>Blog Detail</td>
                            <td>
                                <style>
                                    .ql-clipboard {
                                        display: none;
                                    }
                                    .ql-tooltip {
                                        display: none;
                                    }
                                </style>
                                <div>
                                    {!! $blog->blog_detail !!}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
