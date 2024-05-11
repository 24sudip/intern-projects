<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">All Books</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Books</li>
                <li class="breadcrumb-item active">All</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">List of Books</h4>
                <p class="text-muted font-14 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subject Category</th>
                            <th>Author</th>
                            <th>Publication Date</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>
                                {{ $book->rel_to_subject->subject_name }}
                            </td>

                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publication_date }}</td>
                            <td>{{ $book->price }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
@endsection
