@extends('layouts.dashboardMaster')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                <div class="card-header">
                    <h1>
                        Welcome {{ Auth::user()->name }}
                    </h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('You are logged in!') }} --}}
                    <h2>
                        You are logged in!
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h2>Blogs</h2>
            <h2 class="mt-5">{{ $blog_number }}</h2>
        </div>
        <div class="col-lg-8">
            <h2>Comments</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $blog->blog_title }}</td>
                        @php
                            $comments = App\Models\Comment::where('blog_id',$blog->id)->get();
                            $comment_serial = 1;
                        @endphp
                        <td>
                            <table class="table">
                                @foreach ($comments as $comment)
                                <tr>
                                    <th scope="row">{{ $comment_serial++ }}</th>
                                    <td>{{ $comment->comment_text }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                        <td>@mdo</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
