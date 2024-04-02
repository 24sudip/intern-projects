<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role == 'admin')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tag Edit</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info pb-0">
                    <p class="text-white">Edit Tag</p>
                </div>
                <div class="card-body">
                    @if (session('TgEdtMsg'))
                    <div class="alert alert-success">{{ session('TgEdtMsg') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('tag.update', $tag->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-2">
                            <label for="exampleInputName1" class="form-label">Category Name</label>
                            <input type="text" name="tag_name" value="{{ $tag->tag_name }}" class="form-control" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    <h1>Only Admin Is Allowed To See This Page</h1>
    @endif
@endsection
