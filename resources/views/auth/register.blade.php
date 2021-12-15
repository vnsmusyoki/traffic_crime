<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Account</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/font-awesome.min.css') }}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/materialize.css') }}" />


</head>

<body>
    <div class="blog-login" style="margin-top: -2rem !important;">
        <div class="blog-login-in" style="margin-top: -.5rem !important;">
            <form action="{{ url('register-account') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <a href="{{ url('/') }}"><img src="{{ asset('front-end/images/logo.png') }}" alt="" /></a>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate" name="surname"
                            value="{{ old('surname') }}">
                        <label for="first_name1">Surname</label></label>

                    </div>
                    @error('surname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name12" type="text" class="validate" name="other_names"
                            value="{{ old('other_names') }}">
                        <label for="first_name12">Other Names</label></label>

                    </div>
                    @error('other_names')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name13" type="file" class="validate" name="picture">
                    </div>
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name14" type="text" class="validate" name="email">
                        <label for="first_name14">Email Address</label></label>

                    </div>@error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_names" type="password" class="validate" name="password">
                        <label for="last_names">Password</label>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate" name="password_confirmation">
                        <label for="last_name">Confirm Password</label>
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn-large btn-log-in" type="submit">Login</button>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="for-pass">Return to Login Page?</a>

            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="{{ asset('front-end/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front-end/js/custom.js') }}"></script>
</body>

</html>
