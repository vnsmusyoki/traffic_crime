@extends('admin.layout')
@section('title', 'Add new Crime')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add New Officer Here</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Officer</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/upload-officer') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="phone" type="text" class="validate" name="surname"
                                            value="{{ old('surname') }}">
                                        <label for="phone">Surname</label>
                                        @error('surname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="othernames" type="text"  class="validate"
                                            name="other_names" value="{{ old('other_names') }}">
                                        <label for="othernames">Other Names</label>
                                        @error('other_names')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="cphone" type="number" min="1" class="validate" name="phone_number"
                                            value="{{ old('phone_number') }}">
                                        <label for="cphone">Phone Number</label>
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="emails" type="text" class="validate" name="email"
                                            value="{{ old('email') }}">
                                        <label  for="emails">Valid Email Address</label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="files" type="file" class="validate" name="picture"
                                            value="{{ old('picture') }}">
                                        <small class="form-text text-muted" for="files">Picture</small>
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="gender" class="validate" id="">
                                            <option value="">select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s12">
                                        <select name="checkpoint" class="validate" id="">
                                            <option value="">select checkpoint</option>
                                            @foreach ($checkpoints as $checkpoint)
                                                <option value="{{ $checkpoint->id }}">{{ $checkpoint->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('checkpoint')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large"
                                                value="Submit New  Traffic officer">
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
