@extends('admin.layout')
@section('title', 'Add new Crime')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Update CheckPoint Here</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Update Check Point</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/update-checkpoint/' . $checkpoint->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="phone" type="text" class="validate" name="name"
                                            value="{{ $checkpoint->name }}">
                                        <label for="phone">Check Point Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large"
                                                value="Submit Edited  CheckPoint">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
