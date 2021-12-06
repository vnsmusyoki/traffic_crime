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
                        <h4>All CheckPoints</h4>


                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($checkpoints->count() >= 1)
                                        @foreach ($checkpoints as $key => $checkpoint)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $checkpoint->name }}</td>
                                                <td><a href="{{ url('admin/edit-checkpoint/' . $checkpoint->id) }}"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="{{ url('admin/delete-checkpoint/' . $checkpoint->id) }}"><i
                                                            class="material-icons">delete</i></a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                <center>No Checkpoint added</center>
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
