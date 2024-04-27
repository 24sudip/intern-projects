<!-- Nothing worth having comes easy. - Theodore Roosevelt -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="container">
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comment Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Comment Text</th>
                  <th scope="col">Commentor Id</th>
                  <th scope="col">Reply</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $comment->comment_text }}</th>
                  <td>{{ $comment->relation_to_user->name }}</td>
                  <td>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Reply Text</th>
                                <th scope="col">Replier Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($replies as $reply)
                            <tr>
                                <th scope="row">{{ $reply->reply_text }}</th>
                                <td>{{ $reply->relation_to_user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
