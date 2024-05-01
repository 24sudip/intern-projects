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
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#0acf97" value="37" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(10, 207, 151); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Daily Sales</p>
                                <h3 class="">$35,715</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f9bc0b" value="92" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(249, 188, 11); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Sales Analytics</p>
                                <h3 class="">$97,511</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f1556c" value="14" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(241, 85, 108); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Statistics</p>
                                <h3 class="">$954</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card-box mb-0 widget-chart-two">
                            <div class="float-right">
                                <div style="display:inline;width:80px;height:80px;"><canvas width="100" height="100" style="width: 80px; height: 80px;"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#2d7bf4" value="60" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(45, 123, 244); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="widget-chart-two-content">
                                <p class="text-muted mb-0 mt-2">Total Revenue</p>
                                <h3 class="">$32,540</h3>
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
                <h4 class="header-title mb-3">Wallet Balances</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Currency</th>
                            <th>Balance</th>
                            <th>Reserved in orders</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('dashboard_assets') }}/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Tomaslau</h5>
                                <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                            </td>
                            <td>
                                <i class="mdi mdi-currency-btc text-primary"></i> BTC
                            </td>
                            <td>
                                0.00816117 BTC
                            </td>
                            <td>
                                0.00097036 BTC
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('dashboard_assets') }}/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Erwin E. Brown</h5>
                                <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                            </td>
                            <td>
                                <i class="mdi mdi-currency-eth text-primary"></i> ETH
                            </td>
                            <td>
                                3.16117008 ETH
                            </td>
                            <td>
                                1.70360009 ETH
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('dashboard_assets') }}/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Margeret V. Ligon</h5>
                                <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                            </td>
                            <td>
                                <i class="mdi mdi-currency-eur text-primary"></i> EUR
                            </td>
                            <td>
                                25.08 EUR
                            </td>
                            <td>
                                12.58 EUR
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('dashboard_assets') }}/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Jose D. Delacruz</h5>
                                <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                            </td>
                            <td>
                                <i class="mdi mdi-currency-cny text-primary"></i> CNY
                            </td>
                            <td>
                                82.00 CNY
                            </td>
                            <td>
                                30.83 CNY
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('dashboard_assets') }}/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Luke J. Sain</h5>
                                <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                            </td>
                            <td>
                                <i class="mdi mdi-currency-btc text-primary"></i> BTC
                            </td>
                            <td>
                                2.00816117 BTC
                            </td>
                            <td>
                                1.00097036 BTC
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                            </td>
                        </tr>
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
