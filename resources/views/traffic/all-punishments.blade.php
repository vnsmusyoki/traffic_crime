@extends('traffic.layout')
@section('title', 'Traffic Crime Mistakes')
@section('content')
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{ route('officer') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="{{ route('officer') }}"><i class="fa fa-backward"
                            aria-hidden="true"></i>
                        Back</a>
                </li>
            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="ad-v2-hom-info">
            <div class="card row " style="padding: 1rem .5rem;">

                <div class="col-lg-12 mt-5">
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
                                            <td><img src="{{ asset('storage/vehicles/'.$offense->drivercrimelicense->uploaded_vehicle) }}" alt="" style="height: 60px;width:90px;"></td>
                                            <td>{{ $offense->drivercrimecrime->crime_name }}</td>
                                            <td>{{ $offense->drivercrimecrime->crime_points }}</td>
                                            <td>{{ $offense->drivercrimecheckpoint->name }}</td>
                                            <td>{{ $offense->created_at->addHours(3)->format('l, d-m-y, h:i:s a') }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>
                                            <center>No offense recorded</center>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
