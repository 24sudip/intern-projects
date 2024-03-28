@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <h6 class="card-title">Profile Edit</h6>
                <form class="forms-sample" action="{{ route('update.profile') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="exampleInputName1" class="form-label">Full Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        value="{{ Auth::user()->email }}">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Old Password">
                        @if (session('error'))
                        <strong class="text-danger">{{ session('error') }}</strong>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword2" class="form-label">New Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="New Password">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                @if (session('PhotoEdtMsg'))
                <div class="alert alert-success">{{ session('PhotoEdtMsg') }}</div>
                @endif

                @if (session('PhotoErrMsg'))
                <div class="alert alert-danger">{{ session('PhotoErrMsg') }}</div>
                @endif
                <h6 class="card-title">Profile Photo Edit</h6>
                <form class="forms-sample" action="{{ route('update.profile.photo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" name="profile_photo" class="form-control file-upload-info" placeholder="Upload Image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
