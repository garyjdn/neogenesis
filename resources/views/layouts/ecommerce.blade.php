@extends('layouts.base')

@section('inline-style')
  @yield('inner-inline-style')
@endsection

@section('app')
  <?php
    if(Auth::check())
    {
      // if the user already logged in
      $user = Auth::user();
    }
  ?>
  <div id="header">
    @if(isset($wrapper2) && $wrapper2 == true)
    <div class="wrapper2">
    @elseif(isset($wrapper1) && $wrapper1 == true)
    <div class="wrapper1">
    @else
    <div class="wrapper">
    @endif
      <a href="{{route('home')}}"><h1><b>NeoGenesis</b></h1></a>
      <ul class="header-nav">
        @if(isset($user))
        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang Belanja (<span id="sum-cart">2</span>)</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{$user->name}}</a></li>
        <li><a href="{{route('ecommerceLogout')}}">Keluar</a></li>
        @else
        <li>
          <a href="{{route('ecommerceCartPage')}}">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang Belanja (
            <span id="sum-cart">
              @if(session('cart') != NULL)
              {{ count(session('cart')) }}
              @else
              0
              @endif
            </span>)
          </a>
        </li>
        <li><a href="{{route('ecommerceLoginPage')}}">Masuk</a></li>
        <li><a href="{{route('ecommerceRegisterPage')}}">Daftar</a></li>
        <li><a href="#">Cek Pesanan</a></li>
        <li><a href="#">Bantuan</a></li>
        @endif
      </ul>
    </div>
  </div>

  @yield('inner-app')

  <div id="footer">
    <div class="dark-filter"></div>
    <div class="footer-box">
      <div class="wrapper">
        <div class="subscribe-box">
          <div class="vbox">
            <div class="vitem">
              <h4><b>Mau dapat info barang terbaru kami?</b></h4>
              <b>Berlangganan sekarang</b>
            </div>
            <div class="pull-right">
              <input type="email" placeholder="email">&nbsp
              <input type="submit" class="btn btn-sm btn-danger" value="SUBMIT">
            </div>
          </div>
        </div>
        <div class="middle-box">
          <h1>FOLLOW US ON</h1><br>
          <div class="row">
            <div class="col-md-3">
              <div class="middle-box">
                <i class="fa fa-facebook-official fa-5x" aria-hidden="true"></i>
                <div class="middle-box">
                  <label>Facebook</label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="middle-box">
                <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
                <div class="middle-box">
                  <label>Instagram</label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="middle-box">
                <i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i>
                <div class="middle-box">
                  <label>Twitter</label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="middle-box">
                <i class="fa fa-weixin fa-5x" aria-hidden="true"></i>
                <div class="middle-box">
                  <label>Line</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="transparent-bg-box">
      <div class="middle-box">
        <div class="circle">
          <b>NG</b>
        </div>
        <p>&copy; 2017 NeoGenesis.com</p>
      </div>
    </div>
  </div>
@endsection

@section('inline-script')
  @yield('inner-inline-script')
@endsection
