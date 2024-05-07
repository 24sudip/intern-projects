<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="container">
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Of Searched Blogs</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Searched Blog List <span class="float-end">Total: {{ $blogs->count() }}</span></h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Blog Title</th>
                            <th>Blogger Name</th>
                            <th>Created At</th>
                        </tr>
                        @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->relation_to_user->name }}</td>
                            <td>{{ $blog->created_at }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                No Search Found
                            </td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
