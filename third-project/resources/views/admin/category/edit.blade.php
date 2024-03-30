<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role == 'admin')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info pb-0">
                    <p class="text-white">Edit Category</p>
                </div>
                <div class="card-body">
                    @if (session('CtEdtMsg'))
                    <div class="alert alert-success">{{ session('CtEdtMsg') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-2">
                            <label for="exampleInputName1" class="form-label">Category Name</label>
                            <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control" id="exampleInputName1">
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
