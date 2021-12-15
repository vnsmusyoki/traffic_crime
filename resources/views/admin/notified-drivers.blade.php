@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{ route('admin') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="{{ route('admin') }}"><i class="fa fa-backward" aria-hidden="true"></i>
                        Back</a>
                </li>
            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Notified Drivers</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Gender</th>
                                        <th>Total Offense points</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($drivers->count() >= 1)
                                        @foreach ($drivers as $key => $driver)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/drivers/' . $driver->picture) }}" alt=""
                                                        style="height:50px;width:50px;border-radius:50%;">
                                                </td>
                                                <td>{{ $driver->driverlicenseuser->surname }}
                                                    {{ $driver->driverlicenseuser->other_names }}</td>
                                                <td>{{ $driver->phone_number }}</td>
                                                <td>{{ $driver->driverlicenseuser->email }}</td>
                                                <td>{{ $driver->gender }}</td>
                                                <td>{{ $driver->offense_points }}</td>
                                                <td><a href="{{ url('admin/redeem-officer/' . $driver->id) }}"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="{{ url('admin/barn-driver/' . $driver->id) }}"><i
                                                            class="material-icons">delete</i></a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9">
                                                <center>No drivers who have commited the offenses totaling the range given</center>
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

    </div>
@endsection
