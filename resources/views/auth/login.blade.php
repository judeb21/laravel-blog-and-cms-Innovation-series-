<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="CMS">
    <link rel="shortcut icon" href="asset/img/favicon.png">

    <title>Login Page</title>
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <!--common style-->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--custom css-->
    <link href="{{ asset('admin/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="">

    <!--===========login start===========-->
    <div class="container">

        <form class="form-signin" action="{{ route('login') }}" method="POST">
        @csrf

            <a href="{{ route('login') }}" class="brand text-center">
                <img src="{{ asset('admin/assets/img/dodo-logo.png')}}" srcset="{{asset('admin/assets/img/dodo-logo.png')}} 2x" alt="" />
            </a>
            <h2 class="form-signin-heading">Please sign in</h2>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="checkbox mb-4 mt-4">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                    </span>
                </label>

            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

            <div class="mt-5"></div>
            <hr>
            <p class="legal">© 2019 DODO. All Rights Reserved</p>
        </form>

    </div>
    <!--===========login end===========-->

    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>



</body>

</html>

</html>