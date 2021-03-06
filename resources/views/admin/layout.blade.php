<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard | {{ Auth::user()->surname }}</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('back-end/css/font-awesome.min.css') }}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('back-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/materialize.css') }}" />
    <link rel="stylesheet" href="{{ asset('back-end/css/toastr.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="{{ route('driver') }}" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">

                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="{{ asset('back-end/images/user/6.png') }}" alt="" />My Account <i
                        class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="{{ route('admin') }}" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin
                            Dashboard</a>
                    </li>
                    <li><a href="{{ url('admin/account-security') }}" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i>Update
                            Password</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="ho-dr-con-last waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form-driver').submit();">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Logout
                        </a>

                        <form id="logout-form-driver" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ url('back-end/images/placeholder.jpg') }}" alt="">
                        </li>
                        <li>
                            <h5>{{ Auth::user()->name }} <span>
                                    {{ Carbon\Carbon::now()->format('l, d-m-y') }}</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="{{ route('admin') }}" class="menu-active"><i class="fa fa-bar-chart"
                                    aria-hidden="true"></i> Dashboard</a>
                        </li>

                        <li><a href="{{ url('admin/add-crime') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Crime</a>
                        </li>
                        <li><a href="{{ url('admin/all-drivers') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> All Drivers</a>
                        </li>
                        <li><a href="{{ url('admin/all-crimes') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i>  All Crimes</a>
                        </li>


                        <li><a href="{{ url('admin/upload-checkpoint') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Upload CheckPoint</a>
                        </li>
                        <li><a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> All CheckPoint</a> </li>
                        <li><a href="{{ url('admin/add-officer') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Register traffic Officer</a>
                        </li>
                        <li><a href="{{ url('admin/all-officers') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> All Traffic Officers</a>
                        </li>

                        <li><a href=""{{ url('admin/account-security')}}><i class="fa fa-sign-out" aria-hidden="true"></i> Update Password</a>
                        </li>
                        <li><a href="{{ url('admin/notified-drivers') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Notified Drivers</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            @yield('content')
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->

    <!--======== SCRIPT FILES =========-->
    <script src="{{ asset('back-end/js/jquery.min.js') }}"></script>
    <script src="{{ asset('back-end/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back-end/js/materialize.min.js') }}"></script>
    <script src="{{ asset('back-end/js/custom.js') }}"></script>
    <script src="{{ asset('back-end/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#exampleds').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>

</html>
