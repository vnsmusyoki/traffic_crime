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
                                <h3>{{ $todaypoints }}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Total Points</p>
                                <h3>{{ $totalpoints }}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-3">
                            <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> License No.</p>
                                <h6 class="text-uppercase">{{ $driver->license_number }}</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-4">
                            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Plate No.</p>
                                <h6 class="text-uppercase">{{ $driver->plate_number }}</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sb2-2-3">
            @if ($driver->offense_points >= 20)
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 bg-danger" style="padding:1.5rem 1rem;">
                            <center>
                                <h1><strong>ARREST WARRANT HAS BEEN ISSUED. VISIT OUR OFFICES IN 24 HOURS</strong></h1>
                            </center>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <!--== Country Campaigns ==-->
                <div class="card col-md-12 " style="padding: 1.5rem 1rem;">
                    <center>
                        <h5><strong>Offenses commited today</strong></h5>
                    </center>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Driver</th>
                                    <th>License Number</th>
                                    <th>Phone Number</th>
                                    <th>Vehicle</th>
                                    <th>Mistake</th>
                                    <th>Points</th>
                                    <th>Check Point</th>
                                    <th>Date Recorded</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($offenses->count() >= 1)
                                    @foreach ($offenses as $key => $offense)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $offense->drivercrimedriver->surname }}
                                                {{ $offense->drivercrimedriver->other_names }}</td>
                                            <td>{{ $offense->drivercrimelicense->license_number }}</td>
                                            <td>{{ $offense->drivercrimelicense->phone_number }}</td>
                                            <td><img src="{{ asset('storage/vehicles/' . $offense->drivercrimelicense->uploaded_vehicle) }}"
                                                    alt="" style="height: 60px;width:90px;"></td>
                                            <td>{{ $offense->drivercrimecrime->crime_name }}</td>
                                            <td>{{ $offense->drivercrimecrime->crime_points }}</td>
                                            <td>{{ $offense->drivercrimecheckpoint->name }}</td>
                                            <td>{{ $offense->created_at->addHours(3)->format('l, d-m-y, h:i:s a') }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9">
                                            <center>No offense recorded</center>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
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
                                            <td>{{ Auth::user()->surname }} {{ Auth::user()->other_names }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">2</span>
                                            </td>
                                            <td>Email Address</td>
                                            <td>{{ Auth::user()->email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">3</span>
                                            </td>
                                            <td>License Number</td>
                                            <td>{{ $driver->license_number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="txt-dark weight-500">4</span>
                                            </td>
                                            <td>Date Of Expiry</td>
                                            <td>{{ $driver->date_of_expiry }}
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
