<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RestoEat</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootdip.css") }}" type="text/css">
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> --}}


    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("font-awesome/css/font-awesome.min.css") }}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset("css/creative.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/adedit.css") }}" type="text/css">


  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a ><b>TracerStudy</b>Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">

        <form action="/authentication" method="post">
          <div class="form-group has-feedback">
            <input onchange="try{setCustomValidity('')}catch(e){}" oninvalid="setCustomValidity('Anda belum memasukkan Username!')" required type="text" name="email" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input  onchange="try{setCustomValidity('')}catch(e){}" oninvalid="setCustomValidity('Anda belum memasukkan Password!')"required type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              <a class="btn btn-block btn-flat">Batal</a>
            </div><!-- /.col -->

          </div>
        </form>

        <br>
        <a href="#">Lupa Password</a><br>
        <a href="register.html" class="text-center">Belum memiliki akun? Daftar sekarang!</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js") }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset("js/scrollreveal.min.js") }}"></script>
    <script src="{{ asset("js/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("js/jquery.fittext.js") }}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset("js/creative.js") }}"></script>
    @yield('jscript')
  </body>
</html>
