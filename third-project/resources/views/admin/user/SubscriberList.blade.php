<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role == 'admin')
    <div class="container">
        <div class="row pt-3">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Of Subscribers</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Subscriber List <span class="float-end">Total: {{ $subscribers->count() }}</span></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Subscriber Name</th>
                                <th>Subscriber Email</th>
                                <th>Created At</th>
                            </tr>
                            @foreach($subscribers as $subscriber)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subscriber->relation_to_user->name }}</td>
                                <td>{{ $subscriber->subscriber_email }}</td>
                                <td>{{ $subscriber->created_at }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <h1>Only Admin Is Allowed To See This Page</h1>
    @endif
@endsection
