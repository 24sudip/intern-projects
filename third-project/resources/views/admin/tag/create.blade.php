<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role == 'admin')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tag Add</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info pb-0">
                    <p class="text-white">Add Tag</p>
                </div>
                <div class="card-body">
                    @if (session('TgAdMsg'))
                    <div class="alert alert-success">{{ session('TgAdMsg') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('tag.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="exampleInputName1" class="form-label">Tag Name</label>
                            <input type="text" name="tag_name" placeholder="Tag Name" class="form-control" id="exampleInputName1">
                            @error('tag_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>SL</th>
                                <th>Tag Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tags as $tag)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tag->tag_name }}</td>
                                <td>{{ $tag->created_at }}</td>
                                <td>
                                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form style="display: inline-block;" action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            No Tag Found
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
    <h1>Only Admin Is Allowed To See This Page</h1>
    @endif
@endsection
