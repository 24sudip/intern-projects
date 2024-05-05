<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Edit Book</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                @if (session('bookEdtMsg'))
                <div class="alert bg-success text-white">{{ session('bookEdtMsg') }}</div>
                @endif

                <form role="form" action="{{ route('update.book', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Format</label>
                        <select class="form-control" name="format">
                            <option value="">Select A Format</option>
                            <option value="Hardcover" {{ $book->format == 'Hardcover' ? 'selected' : ''}}>Hardcover</option>
                            <option value="Paperback" {{ $book->format == 'Paperback' ? 'selected' : ''}}>Paperback</option>
                            <option value="Audiobook" {{ $book->format == 'Audiobook' ? 'selected' : ''}}>Audiobook</option>
                            <option value="eBook" {{ $book->format == 'eBook' ? 'selected' : ''}}>eBook</option>
                            <option value="Newspaper" {{ $book->format == 'Newspaper' ? 'selected' : ''}}>Newspaper</option>
                            <option value="Magazine" {{ $book->format == 'Magazine' ? 'selected' : ''}}>Magazine</option>
                            <option value="Journal" {{ $book->format == 'Journal' ? 'selected' : ''}}>Journal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select name="subject_id" class="form-control">
                            <option value="">Select A Subject</option>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}" {{ $subject->id == $book->subject_id ? 'selected' : '' }}>{{ $subject->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="{{ $book->author }}">
                    </div>
                    <div class="form-group">
                        <label>Publication Date</label>
                        <input type="date" name="publication_date" class="form-control" value="{{ $book->publication_date }}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" step="0.01" name="price" class="form-control" value="{{ $book->price }}">
                    </div>
                    <div class="form-group">
                        <label>Rack Number</label>
                        <input type="text" name="rack_number" class="form-control" value="{{ $book->rack_number }}">
                    </div>
                    <div class="form-group">
                        <label>Number of Copy</label>
                        <input type="number" name="number_of_copy" class="form-control" value="{{ $book->number_of_copy }}">
                    </div>
                    <div class="form-group mb-2">
                        <label>Old Photo</label>
                        <div class="input-group col-xs-12">
                            <img style="width:120px;" src="{{ asset('upload/book_photos') }}/{{ $book->book_photo }}" alt="book_photo">
                        </div>
                        <label>Photo upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" name="book_photo" class="form-control file-upload-info" placeholder="Upload Image" onchange="document.getElementById('web').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="input-group col-xs-12">
                            <img style="width:120px;" src="" id="web" alt="book_photo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
