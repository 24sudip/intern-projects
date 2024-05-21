@extends('layouts.dashboardMaster')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">My Blogs</h4>
                    <p class="card-subtitle mb-4">Total Number</p>

                    <div class="text-center">
                        <div style="display:inline;width:165px;height:165px;"><input data-plugin="knob" data-width="165" data-height="165" data-linecap="round" data-fgcolor="#7a08c2" value="{{ $blogs->count() }}" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 86px; height: 55px; position: absolute; vertical-align: middle; margin-top: 55px; margin-left: 0; border: 0px; background: none; font: bold 33px Arial; text-align: center; color: rgb(122, 8, 194); padding: 0px; appearance: none;"></div>
                        <h5 class="text-muted mt-3">Total blogs until today</h5>


                        <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading
                            elements are
                            designed to work best in the meat of your page content.
                        </p>
                    </div>
                </div> <!--end card body-->
            </div> <!-- end card-->
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Bloggers</h4>
                    <p class="card-subtitle mb-4 font-size-13">Registration period from start until today
                    </p>

                    <div class="table-responsive">
                        <table class="table table-centered table-striped table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Blogger Name</th>
                                    <th>Email</th>
                                    <th>Register Date</th>
                                    <th>Social Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="table-user">
                                        @if ($user->profile_photo)
                                        <img src="{{ asset('upload/profile_photos') }}/{{ $user->profile_photo }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                        <a href="{{ route('personal.page', $user->id) }}" class="text-body font-weight-semibold">
                                            {{ $user->name }}
                                        </a>
                                        @else
                                        <img src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">
                                            {{ $user->name }}
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->created_at }}
                                    </td>
                                    @php
                                        $media_links = App\Models\MediaLink::where('blogger_id',$user->id)->get();
                                    @endphp
                                    <td>
                                        @forelse ($media_links as $media_link)
                                        <a href="{{ $media_link->following_link }}">
                                            <i class="{{ $media_link->link_icon }}"></i>
                                        </a>
                                        @empty
                                        Not Available
                                        @endforelse
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $users->onEachSide(1)->links() }}
                        </table>
                    </div>

                </div>
                <!--end card body-->

            </div>
            <!--end card-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xl-6">
            <form class="form-group" action="{{ route('all.search') }}" method="post">
                @csrf
                <label>Search Any Blog By Date</label>
                <input type="date" name="all_search" class="form-control">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="alternative-page-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row dt-row">
                            <div class="col-sm-12">
                                <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="alternative-page-datatable_info" style="width: 1192px;">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending">Blogger Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending">Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_blogs as $all_blog)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td tabindex="0">{{ $all_blog->blog_title }}</td>
                                            <td tabindex="0">{{ $all_blog->relation_to_user->name }}</td>
                                            <td tabindex="0">{{ $all_blog->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $comment_serial = 1;
        $unread_comment = 0;
    @endphp
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-end">{{ $blog->page_view }}</span>
                        <h5 class="card-title mb-0">{{ $blog->blog_title }}</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        @php
                            $comments = App\Models\Comment::where('blog_id',$blog->id)->get();
                        @endphp
                        <div class="col-8">
                            @foreach ($comments as $comment)
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
                                <p class="comment_text">
                                    {{ $comment->comment_text }}
                                </p>
                                @else
                                <p>
                                    {{ $comment->comment_text }}
                                </p>
                                @endif
                            </a>
                            @endforeach
                        </div>
                        <div class="col-4 text-end">
                            <span class="text-muted">{{ $comment_serial++ }}<i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div>
        @endforeach
        <div class="col-md-6">
            <h2>Unread Comments {{ $unread_comment }}</h2>
        </div>
    </div>
</div>
@endsection
