<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Restaurant</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset("/admin_login/css/style.css") }}">
</head>

<body>
    <div class="login-form">
        <h1>Restoeat</h1>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/restaurant/authentication') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input name="email" type="email" class="form-control" placeholder="Username" id="UserName" value="{{ old('email') }}">
                <i class="fa fa-envelope"></i>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} log-status">
                <input name="password" type="password" class="form-control" placeholder="Password" id="Passwod">
                <i class="fa fa-lock"></i>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="remember">
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <!-- span class="alert">Invalid Credentials</span -->
            <a class="link" href="#">Lost your password?</a>
            <button type="submit" class="log-btn" >Log in</button>
        </form>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!--script src="{{ asset("/admin_login/js/index.js") }}"></script-->
</body>
</html>
