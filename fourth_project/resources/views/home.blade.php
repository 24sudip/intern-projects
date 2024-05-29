@extends('layouts.dashboardMaster')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-4">Account Overview</h4>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#0acf97" value="{{ $borrowed_books }}" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(10, 207, 151); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">New Borrowed Books</p>
                                <h3 class="">{{ $borrowed_books }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f9bc0b" value="{{ $not_returned_books }}" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(249, 188, 11); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Not Returned Books</p>
                                <h3 class="">{{ $not_returned_books }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f1556c" value="{{ $returned_books }}" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(241, 85, 108); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Returned Books</p>
                                <h3 class="">{{ $returned_books }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#2d7bf4" value="{{ $total_books->count() }}" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(45, 123, 244); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Total Read Books</p>
                                <h3 class="">{{ $total_books->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h4 class="header-title mb-3">Book Records</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Book Name</th>
                            <th>Borrow Date</th>
                            <th>Due Date</th>
                            <th>Return Date</th>
                            <th>Overdue</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($total_books as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->rel_to_book->title }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->borrow_date)->format('M d Y') }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->due_date)->format('M d Y') }}
                                </td>
                                <td>
                                    @if ($item->return_date != null && $item->user_status == 'returned')
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->return_date)->format('M d Y') }}
                                    @else
                                    <span>pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->due_date < Carbon\Carbon::now() && $item->user_status == 'borrowed')
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->due_date)->diffForHumans() }}
                                    @else
                                    <span>0</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    {{-- {{ __('Dashboard') }} --}}
                    <h4>Welcome {{ Auth::user()->name }}</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>
                            {{ __('You are logged in!') }}
                        </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
