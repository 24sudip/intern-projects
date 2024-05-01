<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
@extends('layouts.dashboardMaster')

@section('content')
<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Edit Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </li>
</ul>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box mt-4">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form role="form" action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter Name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Old Password</label>
                        <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
                            <label>Photo upload</label>
                            <div class="input-group col-xs-12">
                                <input type="file" name="profile_photo" class="form-control file-upload-info" placeholder="Upload Image" onchange="document.getElementById('web').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="input-group col-xs-12">
                                <img style="width:120px;" src="" id="web" alt="profile_photo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
