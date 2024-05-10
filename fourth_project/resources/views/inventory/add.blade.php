<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Borrow Book</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Borrow</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                @if (session('boroAdMsg'))
                <div class="alert bg-success text-white">{{ session('boroAdMsg') }}</div>
                @endif

                @if (session('retnMsg'))
                <div class="alert bg-info text-white">{{ session('retnMsg') }}</div>
                @endif

                @if ($errors->any())
                <div class="alert bg-danger text-white">
                    <ul>
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                @endif
                <form role="form" action="{{ route('inventory.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="{{ $book->title }}">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" value="{{ $book->author }}">
                    </div>
                    <div class="form-group">
                        <label>Total number of copy</label>
                        <input type="text" class="form-control" value="{{ $book->number_of_copy }}">
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <select name="user_id" class="form-control select2">
                            <option value="">Select Reader's Name</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($inventories->count() == $book->number_of_copy)
                    No more copies available
                    @else
                    <button type="submit" class="btn btn-primary">Borrow</button>
                    @endif
                </form>
            </div>
        </div>
        <div class="col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                            <th scope="col">User</th>
                            <th scope="col">Borrow Date</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($inventories as $inventori)
                            <tr>
                                <th scope="row">{{ $inventori->rel_to_user->name }}</th>
                                <td>{{ $inventori->borrow_date }}</td>
                                <td>{{ $inventori->due_date }}</td>
                                <td><a href="{{ route('inventory.give',$inventori->id) }}" class="btn btn-success">Return</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td>No Borrower Available</td>
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
