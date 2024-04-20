<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Group Add</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info pb-0">
                <p class="text-white">Add Group</p>
            </div>
            <div class="card-body">
                @if (session('GrpAdMsg'))
                <div class="alert alert-success">{{ session('GrpAdMsg') }}</div>
                @endif
                <form class="forms-sample" action="{{ route('group.inventory.store', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Blog Title</label>
                        <input type="text" value="{{ $blog->blog_title }}" class="form-control" disabled>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInput2" class="form-label">Group Name</label>
                        <select class="form-control" name="group_name" id="exampleInput2">
                            <option value="">Select Group</option>
                            <option value="Celebration">Celebration</option>
                            <option value="Personal-Slider">Personal-Slider</option>
                            <option value="Classic-Slider">Classic-Slider</option>
                            <option value="Editors-Pick">Editors-Pick</option>
                            <option value="Minimal">Minimal</option>
                            <option value="Classic">Classic</option>
                        </select>
                        @error ('group_name')
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
                    <th scope="col">SL</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($group_inventories as $group_invent)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $group_invent->group_name }}</td>
                        <td>{{ $group_invent->created_at }}</td>
                        <td><a href="{{ route('group.inventory.delete', $group_invent->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td>
                            No Group Found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
