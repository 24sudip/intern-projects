<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Blogs</li>
        </ol>
    </nav>
</div>
<div class="row">
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
                                        <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th>
                                        <th>Banner Theme</th>
                                        <th>Theme Change</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td tabindex="0">{{ $blog->blog_title }}</td>
                                        <td tabindex="0">{{ $blog->created_at }}</td>
                                        <td>
                                            @if ($blog->banner_theme == 0)
                                            Small
                                            @else
                                            Large
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.banner', $blog->id) }}" method="POST">
                                                @csrf
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Activate
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button class="dropdown-item" value="0" name="banner_theme">Small</button></li>
                                                        <li><button class="dropdown-item" value="1" name="banner_theme">Large</button></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm btn-primary">Details</a>
                                            <a href="{{ route('blog.tag', $blog->id) }}" class="btn btn-sm btn-info">Add Tags</a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-success">Edit</a>
                                            <form style="display: inline-block" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
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
@endsection
