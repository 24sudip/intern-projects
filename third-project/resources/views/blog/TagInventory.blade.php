<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Tag Add</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info pb-0">
                <p class="text-white">Add Blog Tag</p>
            </div>
            <div class="card-body">
                @if (session('TgAdMsg'))
                <div class="alert alert-success">{{ session('TgAdMsg') }}</div>
                @endif
                <form class="forms-sample" action="{{ route('tag.inventory.store', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Blog Title</label>
                        <input type="text" value="{{ $blog->blog_title }}" class="form-control" disabled>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInput2" class="form-label">Tag Name</label>
                        <select class="form-control" name="tag_id" id="exampleInput2">
                            <option value="">Select Tag</option>
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                            @endforeach
                        </select>
                        @error ('tag_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    {{-- <th scope="col">Color</th> --}}
                    <th scope="col">Tag Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($tag_inventories as $tag_invent)
                    <tr>
                        <td>{{ $tag_invent->relation_to_tag->tag_name }}</td>
                        <td>{{ $tag_invent->created_at }}</td>
                        <td><a href="{{ route('tag.inventory.delete', $tag_invent->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td>
                            No Tag Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
