@extends('traffic.layout')
@section('title', 'Traffic Dashboard')
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
        <div class="card" style="padding: 1rem;">
            <form action="{{ url('officer/search-license') }}" autocomplete="off" method="POST">
                @csrf
                <h5><strong>Search Driver License</strong></h5>
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
                    <div class="input-field col s12">
                        <input type="submit" class="waves-effect waves-light btn-large" value="Search Driving License">
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
