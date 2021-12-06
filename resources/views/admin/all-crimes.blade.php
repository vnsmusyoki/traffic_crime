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
                        <h4>All Crimes</h4>


                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Points</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($crimes->count() >= 1)
                                        @foreach ($crimes as $key => $crime)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $crime->crime_name }}</td>
                                                <td>{{ $crime->crime_points }}</td>
                                                <td>{{ $crime->crime_description }}</td>
                                                <td><a href="{{ url('admin/edit-crime/' . $crime->id) }}"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="{{ url('admin/delete-crime/' . $crime->id) }}"><i
                                                            class="material-icons">delete</i></a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                <center>No crimes added</center>
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
