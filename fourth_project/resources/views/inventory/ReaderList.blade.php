<!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Reader List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Readers</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                            <th scope="col">Book Title</th>
                            <th scope="col">Reader</th>
                            <th scope="col">Borrow Date</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Return Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($inventories as $inventori)
                            <tr>
                                <th scope="row">{{ $inventori->rel_to_book->title }}</th>
                                <th scope="row">{{ $inventori->rel_to_user->name }}</th>
                                <td>{{ $inventori->borrow_date }}</td>
                                <td>{{ $inventori->due_date }}</td>
                                <td>{{ $inventori->return_date }}</td>
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
