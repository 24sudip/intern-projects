<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">View Books</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Books</li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">Buttons example</h4>
                <p class="text-muted font-14 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                            <th>Return List</th>
                            <th>Number of Copy</th>
                            <th>Rack Number</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>
                                <a href="{{ route('edit.book', $book->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('show.book', $book->id) }}" class="btn btn-sm btn-primary">Details</a>
                                <a href="{{ route('soft.delete.book', $book->id) }}" class="btn btn-sm btn-warning">Soft Delete</a>
                                <a href="#" class="btn btn-sm btn-danger del" data-link="{{ route('force.delete.book', $book->id) }}">Hard Delete</a>
                                <a href="#" class="btn btn-sm btn-primary">Issue</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-secondary">Readers List</a>
                            </td>
                            <td>{{ $book->number_of_copy }}</td>
                            <td>{{ $book->rack_number }}</td>
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

@section('footer_script')
<script>
    $('.del').click(function () {
        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var link = $(this).attr('data-link');
                window.location.href = link;
            }
        });
    });
</script>
@if (session('success'))
    <script>
        Swal.fire({
            title: "Deleted!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif
@endsection
