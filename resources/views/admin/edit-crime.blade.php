@extends('admin.layout')
@section('title', 'Edit Crime')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Edit Crime Here</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Edit Crime</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="{{ url('admin/update-crime/'.$crime->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="phone" type="text" class="validate" name="crime_name"
                                            value="{{ $crime->crime_name}}">
                                        <label for="phone">Crime</label>
                                        @error('crime_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="cphone" type="number" min="1" max="100" class="validate"
                                            name="crime_points" value="{{ $crime->crime_points }}">
                                        <label for="cphone">Points to be Deducted</label>
                                        @error('crime_points')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="crime_description" id="" cols="30" rows="10"
                                                class="form-control">{{ $crime->crime_description }}</textarea>
                                            @error('crime_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-dark btn-large"
                                                value="Update   Crime">
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
