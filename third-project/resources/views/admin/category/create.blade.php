<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role == 'admin')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category Add</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info pb-0">
                    <p class="text-white">Add Category</p>
                </div>
                <div class="card-body">
                    @if (session('CtAdMsg'))
                    <div class="alert alert-success">{{ session('CtAdMsg') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInputName1" class="form-label">Category Name</label>
                            <input type="text" name="category_name" placeholder="Category Name" class="form-control" id="exampleInputName1">
                            @error('category_name')
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
                                <th>Category Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form style="display: inline-block;" action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    No Category Found
                                </td>
                            </tr>
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

{{-- @section('footer_script')
<script>
    $('.del_btn').click(function () {
        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
            });
        }
        });
    });
</script>
@endsection --}}
