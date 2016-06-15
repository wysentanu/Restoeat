@extends('main.index')
@section('content')

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a ><b>TracerStudy</b>Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input onchange="try{setCustomValidity('')}catch(e){}" oninvalid="setCustomValidity('Anda belum memasukkan Username!')" required type="text" name="username" class="form-control" placeholder="Username">
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
@stop
