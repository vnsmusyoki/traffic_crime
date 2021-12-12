@extends('traffic.layout')
@section('title', 'Add  Vehicle Details')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Upload Your License Here</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Vehicle</h4>
                            <p>Upload Your License Details below</p>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('driver/upload-license') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="phone" type="number" class="validate" name="id_number"
                                            value="{{ old('id_number') }}">
                                        <label for="phone">ID Number</label>
                                        @error('id_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="cphone" type="text" class="validate" name="license_number"
                                            value="{{ old('license_number') }}">
                                        <label for="cphone">License Number</label>
                                        @error('license_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="city" type="date" class="validate" name="date_of_birth"
                                            placeholder="Date of Birth" value="{{ old('date_of_birth') }}">
                                        <label for="city"></label>
                                        @error('date_of_birth')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <small class="text-muted form-text">Date of Birth</small>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="country" type="date" class="validate" name="date_of_issue"
                                            placeholder="Date of Issue" value="{{ old('date_of_issue') }}">
                                        <label for="country"></label>
                                        @error('date_of_issue')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <small class="text-muted form-text">Date of Issue</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="gender" class="validate" id="">
                                            <option value="">select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="password1" type="date" class="validate" name="date_of_expiry"
                                            value="{{ old('date_of_expiry') }}">
                                        <label for="password1"></label>
                                        @error('date_of_expiry')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <small class="text-muted form-text">Date of Expiry</small>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="county_of_residence" class="validate" id="">
                                            <option value="">Select Residence county</option>
                                            <option value="Mombasa">Mombasa</option>
                                            <option value="Nairobi">Nairobi</option>
                                        </select>
                                        @error('county_of_residence')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="file" name="driving_license" class="validate">
                                        <small class="form-text text-muted">Upload Driving Licence</small>
                                        @error('driving_license')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-field col s4">
                                        <input id="phone_number" type="number" min="1" class="validate"
                                            name="phone_number" value="{{ old('phone_number') }}">
                                        <label for="phone_number">Phone Number</label>
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="plate_number" type="text" class="validate" name="plate_number"
                                            value="{{ old('plate_number') }}">
                                        <label for="plate_number">Plate Number</label>
                                        @error('plate_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s4">
                                        <input type="file" name="uploaded_vehicle" class="validate">
                                        <small class="form-text text-muted">Upload Vehicle Image</small>
                                        @error('uploaded_vehicle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large"
                                            value="Submit Driving License">
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
