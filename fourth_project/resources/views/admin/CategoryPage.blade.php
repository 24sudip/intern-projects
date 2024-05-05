<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
@extends('layouts.dashboardMaster')

@section('content')
    <ul class="list-inline menu-left mb-0">
        <li>
            <div class="page-title-box">
                <h4 class="page-title">Category</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </li>
    </ul>
    @livewire('backend.category')
@endsection
