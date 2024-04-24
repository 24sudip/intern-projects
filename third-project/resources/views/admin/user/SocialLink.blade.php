<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role != 'blocked')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Link Add</li>
            </ol>
        </nav>
    </div>
    @livewire('backend.social-link')
    @else
    <h1>Valid User Is Allowed To See This Page</h1>
    @endif
@endsection
