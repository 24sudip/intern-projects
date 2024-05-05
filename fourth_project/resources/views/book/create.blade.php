<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Add Book</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Book</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                @if (session('PhotoAdMsg'))
                <div class="alert bg-success text-white">{{ session('PhotoAdMsg') }}</div>
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
                <form role="form" action="{{ route('store.book') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Format</label>
                        <select class="form-control" name="format">
                            <option value="">Select A Format</option>
                            <option value="Hardcover">Hardcover</option>
                            <option value="Paperback">Paperback</option>
                            <option value="Audiobook">Audiobook</option>
                            <option value="eBook">eBook</option>
                            <option value="Newspaper">Newspaper</option>
                            <option value="Magazine">Magazine</option>
                            <option value="Journal">Journal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select name="subject_id" class="form-control">
                            <option value="">Select A Subject</option>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label>Publication Date</label>
                        <input type="date" name="publication_date" class="form-control" placeholder="Publication Date">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label>Rack Number</label>
                        <input type="text" name="rack_number" class="form-control" placeholder="Rack Number">
                    </div>
                    <div class="form-group">
                        <label>Number of Copy</label>
                        <input type="number" name="number_of_copy" class="form-control" placeholder="Number of Copy">
                    </div>
                    <div class="form-group mb-2">
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
