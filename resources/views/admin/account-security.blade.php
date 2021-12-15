@extends('Admin.layout')
@section('title', 'Admin Account Security')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Account Set Up</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Update Account Settings</h4>

                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/update-password') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s6">

                                        <input id="fnames" type="password" class="validate" name="password"
                                            value="{{ old('password') }}">
                                        <label for="fnames">Password</label></label>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="othernaes" type="password" class="validate"
                                            name="password_confirmation" value="{{ old('password_confirmation') }}">
                                        <label for="othernaes">Confirm Password</label></label>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large"
                                            value="Update Password">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Update Account Email Address</h4>

                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/update-email') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">

                                        <input id="fnames" type="text" class="validate" name="email"
                                            value="{{ old('email') }}">
                                        <label for="fnames">Email Address</label></label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large"
                                            value="Update Email Address">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Update Account Profile</h4>

                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/update-avatar') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">

                                        <input id="fnames" type="file" class="validate" name="picture"
                                            value="{{ old('picture') }}">
                                        <label for="fnames">profile Picture</label></label>
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large"
                                            value="Update Profile Picture">
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
