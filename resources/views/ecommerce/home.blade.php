@extends('layouts.base')

@section('app')
  <div id="header">
    <div class="wrapper">
      <h1><b>NeoGenesis</b></h1>

      <ul class="header-nav">
        <li><a href="#">Masuk</a></li>
        <li><a href="#">Daftar</a></li>
        <li><a href="#">Cek Pesanan</a></li>
        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbspKeranjang Belanja (<span id="sum-cart">2</span>)</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#">Bantuan</a></li>
      </ul>
    </div>
  </div>

  <div id="content">
    <div class="wrapper">
      <div class="search-area">
        <form method="GET" action="{{ route('ecommerceSearchProduct') }}" role="search">
          <div class="select-style">
            <span class="arr"></span>
            <select>
              <option>Pilih Kategori</option>
              <option>Flashdisk</option>
              <option>Keyboard</option>
              <option>Mouse</option>
              <option>Fan</option>
              <option>Speaker</option>
              <option>Headset</option>
              <option>Charger</option>
            </select>
          </div>
          <input type="text" name="q" placeholder="Cari barang.." id="search-bar">
          <input type="submit" id="search-button" value="Cari">
        </form>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="dark-filter"></div>
      <div class="carousel-inner">
        <div class="item active">
          <h3><b>NEOGENESIS<br>Murah, Cepat, Lengkap, dan Berkualitas!</b></h3>
        </div>

        <div class="item">
          <h3><b>Rp 69.000 RAZER ORNATA<br>HANYA di NEOGENESIS</b></h3>
        </div>

        <div class="item">
          <h3><b>Rp 69.000 RAZER ORNATA<br>HANYA di NEOGENESIS</b></h3>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div id="home">
        <div class="section-title">
          <div class="h2dec"></div>
          <h2>Baru</h2>
          <i class="fa fa-info-circle  fa-lg pull-right" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="dengan berlangganan anda akan menerima email barang baru kami"></i>
        </div>
        @component('ecommerce.components.item-list')
        @endcomponent
        <div class="row">
          <div class="col-md-6 col-sm-12 home-item">
          </div>
          <div class="col-md-6 col-sm-12 home-item">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 mini-banner">
            <img src="{{asset('img/mouse.jpeg')}}">
            <div class="mini-banner-caption">
              <div class="dark-filter"></div>
              <h4><b>Mouse Razer Murah Mulai Dari Rp 550.000</b></h4>
            </div>
          </div>
        </div>
        <div class="section-title">
          <div class="h2dec"></div>
          <h2>Mouse</h2>
          <i class="fa fa-info-circle  fa-lg pull-right" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="dengan berlangganan anda akan menerima email barang baru kami"></i>
        </div>
        @component('ecommerce.components.item-list')
        @endcomponent
        <div class="row">
          <div class="col-md-12 col-sm-12 mini-banner">
            <img src="{{asset('img/Blackbird-TKL-6.jpg')}}">
            <div class="mini-banner-caption2">
              <h4><b>Keyboard Gaming Murah Mulai Dari Rp 550.000</b></h4>
            </div>
          </div>
        </div>
        <div class="section-title">
          <div class="h2dec"></div>
          <h2>Keyboard</h2>
          <i class="fa fa-info-circle  fa-lg pull-right" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="dengan berlangganan anda akan menerima email barang baru kami"></i>
        </div>
        @component('ecommerce.components.item-list')
        @endcomponent
      </div>
    </div>

  </div>

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
