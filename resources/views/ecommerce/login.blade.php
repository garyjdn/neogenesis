@extends('layouts.ecommerce')

@section('inner-app')

  <div id="content">
      <div class="login-area">
        <div class="login-box">
          <h2><b>Login</b></h2>
          <hr>
          <form method="post" action="{{route('ecommerceLogin')}}">
            <div class="form-group">
              <label><b>Email</b></label>
              <input type="email" name="email" class="form-control" placeholder="user@mail.com" autocomplete="off">
            </div>
            <div class="form-group">
              <label><b>Password</b></label>
              <input type="password" name="password" class="form-control" placeholder="********">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="form-control"><b>Masuk</b></button>
            </div>
            {{csrf_field()}}
          </form>
          <p>belum punya akun?</p>
          <div class="form-group">
            <a href="{{route('ecommerceRegisterPage')}}"><button type="button" class="form-control"><b>Daftar</b></button></a>
          </div>
          <hr>
          <a href="{{route('redirectProvider', ['provider' => 'facebook'])}}"><button type="button" class="form-control"><i class="fa fa-facebook" aria-hidden="true"></i> <b>Masuk Dengan Facebook</b></button></a>
          <a href="{{route('redirectProvider', ['provider' => 'google'])}}"><button type="button" class="form-control"><i class="fa fa-google-plus" aria-hidden="true"></i> <b>Masuk Dengan Google</b></button></a>
          <a href="{{route('redirectProvider', ['provider' => 'twitter'])}}"><button type="button" class="form-control"><i class="fa fa-twitter" aria-hidden="true"></i> <b>Masuk Dengan Twitter</b></button></a>
        </div>
        <div class="dark-filter"></div>
      </div>
    </div>
  </div>

@endsection
