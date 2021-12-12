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
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Description</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Full Names</td>
                                <td>{{ $driver->surname }} {{ $driver->other_names }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Email Address</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Phone Number</td>
                                <td>{{ $driver->phone_number }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>ID Number</td>
                                <td>{{ $driver->id_number }}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Gender</td>
                                <td>{{ $driver->gender }}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Date of Birth</td>
                                <td>{{ $driver->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Date of Issue</td>
                                <td style="text-transform: uppercase;">{{ $driver->date_of_issue }}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>License Number</td>
                                <td>{{ $driver->license_number }}</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>License Expiry Date</td>
                                <td>{{ $driver->date_of_expiry }}</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>County of Residence</td>
                                <td>{{ $driver->county_of_residence }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <center>
                        <h4>Vehicle details</h4>
                    </center>
                    <hr>
                    <img src="{{ asset('storage/vehicles/' . $driver->uploaded_vehicle) }}" class="img-fluid"
                        alt="">
                </div>
                <br>
                <hr>
                <div class="col-lg-12 mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
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
@endsection
