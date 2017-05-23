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

  <div class="cart-box">
    @if(isset($wrapper2) && $wrapper2 == true)
    <div class="wrapper2">
    @elseif(isset($wrapper1) && $wrapper1 == true)
    <div class="wrapper1">
    @else
    <div class="wrapper">
    @endif
      <div class="row">
        <div class="col-md-12 cart-panel">
          <h1>Keranjang Belanja</h1>
          <table class="table">
            <tr>
              <th>no</th>
              <th>Nama</th>
              <th class="hz-center">Satuan</th>
              <th colspan="3" class="hz-center">Jumlah</th>
              <th class="hz-right">Subtotal</th>
            </tr>
            <?php $no = 1; ?>
            @if(isset($products))
            @foreach($products as $p)
            <tr id="{{$no}}">
              <td>{{$no}}</td>
              <td>{{$p->name}}</td>
              <td class="hz-center satuan" id="price-{{$no}}">{{$p->price}}</td>
              <td class="hz-center"><i class="fa fa-minus-circle remove-item" id="remove-{{$no}}" aria-hidden="true"></i></td>
              <td class="hz-center" id="jumlah-{{$no}}">{{session('cart')[$p->id]}}</td>
              <td class="hz-center"><i class="fa fa-plus-circle add-item" id="add-{{$no}}" aria-hidden="true"></i></td>
              <td class="hz-right subtotal" id="subtotal-{{$no}}">{{($p->price * session('cart')[$p->id])}}</td>
            </tr>
            <?php $no++; ?>
            @endforeach
            @endif
            <tr>
              <td colspan="6">Total</td>
              <td class="hz-right total"></td>
            </tr>
          </table>
          <button type="button" class="btn btn-success pull-right">Checkout</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@section('inner-inline-script')
<script>
  $(document).ready(function(){
    function setTotalDisplay()
    {
      var subtotal = 0
      $(".subtotal").each(function(){
          subtotal += Number($(this).text());
      });
      $('.total').html(subtotal);
    }

    function setSubtotalDisplay(id)
    {
      //$("#subtotal")
      setTotalDisplay();
    }

    $('.add-item').click(function(event){
      thisID = event.target.id;
      id = thisID.split("-");
      id = id[1];
      currentValue = Number($('#jumlah-'+id).html());
      newValue = currentValue + 1;
      $('#jumlah-'+id).html(newValue);
      setSubtotalDisplay(id);
    });

    $('.remove-item').click(function(event){
      thisID = event.target.id;
      id = thisID.split("-");
      id = id[1];
      currentValue = Number($('#jumlah-'+id).html());
      newValue = currentValue - 1;
      $('#jumlah-'+id).html(newValue);
      setSubtotalDisplay(id);
    });

    setTotalDisplay();



  });
</script>
@endsection
