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
        <div class="col-lg-2">
            <h2>Total Blogs</h2>
            <h2 class="mt-5">{{ $blogs->count() }}</h2>
        </div>
        <div class="col-lg-10">
            <h2>Comments</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Views</th>
                    @php
                        $comment_serial = 1;
                        $unread_comment = 0;
                    @endphp
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $blog->blog_title }}</td>
                        @php
                            $comments = App\Models\Comment::where('blog_id',$blog->id)->get();
                        @endphp
                        <td>
                            <table class="table">
                                @foreach ($comments as $comment)
                                <tr>
                                    <th scope="row">{{ $comment_serial++ }}</th>
                                    <td>
                                        <a href="{{ route('comment.details', $comment->id) }}">
                                            <style>
                                                .comment_text {
                                                    text-decoration: underline;
                                                    font-weight: 800;
                                                    color: #222;
                                                }
                                            </style>
                                            @if ($comment->reading_status == 0)
                                                <input type="hidden" value="{{ $unread_comment++ }}">
                                            <span class="comment_text">
                                                {{ $comment->comment_text }}
                                            </span>
                                            @else
                                            <span>
                                                {{ $comment->comment_text }}
                                            </span>
                                            @endif
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                        <td>{{ $blog->page_view }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <h2>Unread Comments {{ $unread_comment }}</h2>
        </div>
    </div>
</div>
@endsection
