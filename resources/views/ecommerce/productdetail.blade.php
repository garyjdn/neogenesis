@extends('layouts.ecommerce')

@section('inner-app')

  <div id="content">
    <div class="search-box">
      @if(isset($wrapper2) && $wrapper2 == true)
      <div class="wrapper2">
      @elseif(isset($wrapper1) && $wrapper1 == true)
      <div class="wrapper1">
      @else
      <div class="wrapper">
      @endif
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

    <div class="product-detail-box">
      @if(isset($wrapper2) && $wrapper2 == true)
      <div class="wrapper2">
      @elseif(isset($wrapper1) && $wrapper1 == true)
      <div class="wrapper1">
      @else
      <div class="wrapper">
      @endif
        <div class="row row-detail-box">
          <div class="display-image-box col-md-4">
            <img src="{{asset('img/'.$product->image)}}">
          </div>
          <div class="product-info-box col-md-6">
            <h2>{{$product->name}}</h2>
            <select class="rating-bar">
            @for($i = 1; $i <= 5; $i++)
              @if($i == round($product->rating))
              <option value="{{$i}}" selected>{{$i}}</option>
              @else
              <option value="{{$i}}">{{$i}}</option>
              @endif
            @endfor
            </select>
            <table class="product-att">
              <tr>
                <td>Price</td>
                <td>:</td>
                <td class="red"><b>Rp {{$product->price}}</b></td>
              </tr>
              <tr>
                <td>Brand</td>
                <td>:</td>
                <td>{{$product->brand}}</td>
              </tr>
              <tr>
                <td>Memory</td>
                <td>:</td>
                <td>{{$product->memory}}</td>
              </tr>
            </table>
            <br>
            <p>{{$product->desc}}</p>
            <a href="#">
              <button class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Beli Sekarang</button>
            </a>
            <a href="{{route('addcart', ['id' => Crypt::encryptString($product->id)] )}}">
              <button id="addToCart" class="btn">Tambahkan ke Keranjang</button>
            </a>
          </div>
        </div>
        <div class="row comment-area">
          <div class="col-md-12">
            <h3>comments</h3>
            <hr>
            <div class="comment">
              <div class="col-md-1">
                <img src="{{asset('img/unknown.png')}}">
              </div>
              <div class="col-md-11">
                <label class="user-label">Hendra K</label>
                <p class="date"><i>1 februari 2017</i></p>
                <select class="rating-bar">
                @for($i = 1; $i <= 5; $i++)
                  @if($i == round($product->rating))
                  <option value="{{$i}}" selected>{{$i}}</option>
                  @else
                  <option value="{{$i}}">{{$i}}</option>
                  @endif
                @endfor
                </select>
                <p>Barangnya bagus, sudah diterima hari jumat, recommended bangetlah pokoknya :)</p>
              </div>
            </div>
            <div class="comment">
              <div class="col-md-1">
                <img src="{{asset('img/unknown.png')}}">
              </div>
              <div class="col-md-11">
                <label>Hengky</label>
                <p class="date"><i>1 februari 2017</i></p>
                <select class="rating-bar">
                @for($i = 1; $i <= 5; $i++)
                  @if($i == round($product->rating))
                  <option value="{{$i}}" selected>{{$i}}</option>
                  @else
                  <option value="{{$i}}">{{$i}}</option>
                  @endif
                @endfor
                </select>
                <p>Barangnya bagus, sudah diterima hari jumat, recommended bangetlah pokoknya :)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection

@section('inner-inline-script')
<script>
  $("#addToCart").click(function(event){
    event.preventDefault();
    $.ajax({
      url:"{{ route('addcart', ['id' => Crypt::encryptString($product->id)]) }}",
      type:"GET",
      success:function(response){
        swal(
          response['sub'],
          response['msg'],
          'success'
        )
      }
    });
  });
</script>
@endsection
