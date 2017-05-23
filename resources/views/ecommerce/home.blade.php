@extends('layouts.ecommerce')

@section('inner-app')

  <div id="content">
    <div class="search-box">
      <div class="wrapper">
        <div class="search-area">
          <form method="get" action="{{ route('ecommerceSearchProduct') }}" role="search">
            <div class="select-style">
              <span class="arr"></span>
              <select name="c">
                <option value="0">Pilih Kategori</option>
                @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->value}}</option>
                @endforeach
              </select>
            </div>
            <input type="text" name="q" placeholder="Cari barang.." id="search-bar">
            <input type="submit" id="search-button" value="Cari">
          </form>
        </div>
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
        <div class="item-list">
          <div class="row">
            @foreach($products as $p)
            <a href="{{route('ecommerceProductDetail', ['nama' => (str_replace(' ', '+', $p->name)), 'id' => Crypt::encryptString($p->id)])}}">
              <div class="item col-md-3">
                <div class="img-box">
                  <img src="{{asset('img/'.$p->image)}}">
                </div>
                <div class="info-box">
                  <h5><b>{{$p->name}}</b></h5>
                  <label class="price">Rp {{$p->price}}</label>
                  <select class="rating-bar">
                  @for($i = 1; $i <= 5; $i++)
                    @if($i == round($p->rating))
                    <option value="{{$i}}" selected>{{$i}}</option>
                    @else
                    <option value="{{$i}}">{{$i}}</option>
                    @endif
                  @endfor
                  </select>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
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
        <div class="item-list">
          <div class="row">
            @foreach($mouses as $m)
            <a href="{{route('ecommerceProductDetail', ['nama' => (str_replace(' ', '+', $m->name)), 'id' => Crypt::encryptString($m->id)])}}">
              <div class="item col-md-3">
                <div class="img-box">
                  <img src="{{asset('img/'.$m->image)}}">
                </div>
                <div class="info-box">
                  <h5><b>{{$m->name}}</b></h5>
                  <label class="price">Rp {{$m->price}}</label>
                  <select class="rating-bar">
                  @for($i = 1; $i <= 5; $i++)
                    @if($i == round($m->rating))
                    <option value="{{$i}}" selected>{{$i}}</option>
                    @else
                    <option value="{{$i}}">{{$i}}</option>
                    @endif
                  @endfor
                  </select>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
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
        <div class="item-list">
          <div class="row">
            @foreach($keyboards as $k)
            <a href="{{route('ecommerceProductDetail', ['nama' => (str_replace(' ', '+', $k->name)), 'id' => Crypt::encryptString($k->id)])}}">
              <div class="item col-md-3">
                <div class="img-box">
                  <img src="{{asset('img/'.$k->image)}}">
                </div>
                <div class="info-box">
                  <h5><b>{{$k->name}}</b></h5>
                  <label class="price">Rp {{$k->price}}</label>
                  <select class="rating-bar">
                  @for($i = 1; $i <= 5; $i++)
                    @if($i == round($k->rating))
                    <option value="{{$i}}" selected>{{$i}}</option>
                    @else
                    <option value="{{$i}}">{{$i}}</option>
                    @endif
                  @endfor
                  </select>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  </div>


@endsection
