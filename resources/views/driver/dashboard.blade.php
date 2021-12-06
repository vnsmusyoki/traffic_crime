@extends('driver.layout')
@section('title', 'Driver Dashboard')
@section('content')
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{ route('driver') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="{{ route('driver') }}"><i class="fa fa-backward" aria-hidden="true"></i>
                        Back</a>
                </li>
            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="ad-v2-hom-info">
            <div class="ad-v2-hom-info-inn">
                <ul>
                    <li>
                        <div class="ad-hom-box ad-hom-box-1">
                            <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Points Today</p>
                                <h3>2</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Total Points</p>
                                <h3>{{ $driver->driver_points}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-3">
                            <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> License No.</p>
                                <h6>{{ $driver->license_number}}</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-4">
                            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Plate No.</p>
                                <h6>{{ $driver->plate_number}}</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <!--== Country Campaigns ==-->
                <div class="col-md-6">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Vehicle Details</h4>
                            <p>Lastly updated on  {{ $driver->updated_at->addHours(3)->format('l, d-m-y, h:i:s a') }} </p>

                        </div>
                        <div class="tab-inn">
                            <img src="{{ asset('storage/vehicles/'.$driver->uploaded_vehicle) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <!--== Country Campaigns ==-->
                <div class="col-md-6">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>License Details</h4>
                            <p>Last update - {{ $driver->created_at->addHours(3)->format('l, d-m-y, h:i:s a') }}</p>

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="txt-dark weight-500">1</span>
                                            </td>
                                            <td>Full Names</td>
                                            <td>{{ Auth::user()->surname}}  {{ Auth::user()->other_names}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">2</span>
                                            </td>
                                            <td>Email Address</td>
                                            <td>{{ Auth::user()->email}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">3</span>
                                            </td>
                                            <td>License Number</td>
                                            <td>{{ $driver->license_number}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">4</span>
                                            </td>
                                            <td>Date Of Expiry</td>
                                            <td>{{ $driver->date_of_expiry}}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
