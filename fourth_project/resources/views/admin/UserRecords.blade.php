<!-- When there is no desire, all things are at peace. - Laozi -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="text-white">{{ $user->name }}</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <tr>
                            <th>New Borrowed Books</th>
                            <th>{{ $borrowed_books }}</th>
                        </tr>
                        <tr>
                            <th>Not Returned Books</th>
                            <th>{{ $not_returned_books }}</th>
                        </tr>
                        <tr>
                            <th>Returned Books</th>
                            <th>{{ $returned_books }}</th>
                        </tr>
                        <tr>
                            <th>Total Books</th>
                            <th>{{ $total_books->count() }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card-header bg-success">
                <h5 class="text-white header-title mb-0 py-2">Book Records</h5>
            </div>
            <div class="card-box">
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Book Name</th>
                            <th>Borrow Date</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Overdue</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($total_books as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->rel_to_book->title }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->borrow_date)->format('M d Y') }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->due_date)->format('M d Y') }}
                                </td>
                                <td>
                                    @if ($item->return_date != null && $item->user_status == 'returned')
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->return_date)->format('M d Y') }}
                                    @else
                                    <span>pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->due_date < Carbon\Carbon::now() && $item->user_status == 'borrowed')
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->due_date)->diffForHumans() }}
                                    @else
                                    <span>0</span>
                                    @endif
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
@endsection
