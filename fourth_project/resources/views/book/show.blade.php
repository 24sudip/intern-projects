<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Details of Book</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">{{ $book->title }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Format</th>
                                <td>{{ $book->format }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Subject</th>
                                <td>{{ $book->rel_to_subject->subject_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Author</th>
                                <td>{{ $book->author }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Publication Date</th>
                                <td>{{ $book->publication_date }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>{{ $book->price }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Rack Number</th>
                                <td>{{ $book->rack_number }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Number of Copy</th>
                                <td>{{ $book->number_of_copy }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Image</th>
                                <td><img src="{{ asset('upload/book_photos') }}/{{ $book->book_photo }}" width="120"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
