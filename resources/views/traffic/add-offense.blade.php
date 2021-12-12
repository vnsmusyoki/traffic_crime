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
       <form action="">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                   <div class="form-group">
                       <label for="">Driver Name</label>
                       <input type="text" name="driver" class="form-control">
                   </div>
               </div>
           </div>
       </form>
    </div>
@endsection
