<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Search Book</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Search</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                <form role="form" action="{{ route('search.subject') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Search By Subject Categories</label>
                        <select name="subject_id" class="form-control">
                            <option value="">Select A Subject</option>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                            @endforeach
                        </select>
                        @error('subject_id')
                        <div class="alert bg-danger text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-box mt-4">

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
                <form role="form" action="{{ route('search.result') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Write Title/Author/Publication Date(yyyy-mm-dd)</label>
                        <input type="text" name="search_text" class="form-control" placeholder="Type Here">
                    </div>
                    <div class="form-group">
                        <label>Search By</label>
                        <select class="form-control" name="search_area">
                            <option value="">Select Area</option>
                            <option value="title">Title</option>
                            <option value="author">Author</option>
                            <option value="publication_date">Publication Date</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
