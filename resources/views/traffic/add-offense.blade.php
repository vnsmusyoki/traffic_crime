
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
                <li class="page-back"><a href="{{ route('officer') }}"><i class="fa fa-backward" aria-hidden="true"></i>
                        Back</a>
                </li>
            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="ad-v2-hom-info">
            <div class="ad-v2-hom-info-inn">
                <ul>
                    <li>
                        <div class="ad-hom-box ad-hom-box-1">
                            <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Points Today</p>
                                <h3>2</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Total Points</p>
                                {{-- <h3>{{ $driver->driver_points}}</h3> --}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-3">
                            <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> License No.</p>
                                {{-- <h6>{{ $driver->license_number}}</h6> --}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-4">
                            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Plate No.</p>
                                {{-- <h6>{{ $driver->plate_number}}</h6> --}}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div>
@endsection
