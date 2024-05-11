<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Overdue List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Overdue</li>
                <li class="breadcrumb-item active">Borrowers</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                            <th scope="col">Book Title</th>
                            <th scope="col">Reader</th>
                            <th scope="col">Borrow Date</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Overdue Time</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($overdues as $inventori)
                            <tr>
                                <th scope="row">{{ $inventori->rel_to_book->title }}</th>
                                <th scope="row">{{ $inventori->rel_to_user->name }}</th>
                                <td>{{ $inventori->borrow_date }}</td>
                                <td>{{ $inventori->due_date }}</td>
                                <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $inventori->due_date)->diffForHumans() }}</td>
                                <td><a href="{{ route('overdue.change',$inventori->id) }}" class="btn btn-primary">Return</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td>No Reader Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
