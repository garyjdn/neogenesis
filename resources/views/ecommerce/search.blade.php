@extends('layouts.ecommerce')

@section('inner-app')
  <div id="content">
    <div class="wrapper2">
      <div id="home" class="row">
        <div class="col-md-3 panel-filter">
          <div class="filter-box">
            <div class="filter-header">
              <h4>Filter Pencarian</h4>
            </div>
            <div class="filter-body">
              <form method="GET" action="{{route('ecommerceFilterProduct')}}">
                <div class="form-group">
                  <h5><b>Nama</b></h5>
                  @if(isset($q))
                  <input id="selected-query" type="text" name="q" placeholder="Cari barang.." class="form-control" value="{{$q}}">
                  @else
                  <input id="selected-query" type="text" name="q" placeholder="nama" class="form-control" value="">
                  @endif
                </div>
                <div class="form-group">
                  <h5><b>Kategori</b></h5>
                  <select name="c" class="form-control">
                    <option value="0">Pilih Kategori</option>
                    @foreach($categories as $c)
                    @if(isset($sc) && ($sc == $c->id))
                    <option value="{{$c->id}}" selected>{{$c->value}}</option>
                    @else
                    <option value="{{$c->id}}">{{$c->value}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <h5><b>Urut berdasarkan</b></h5>
                  <select name="sort" class="form-control">
                    @if($sort == 0)
                    <option value="0" selected>Terbaru</option>
                    @else
                    <option value="0">Terbaru</option>
                    @endif
                    @if($sort == 1)
                    <option value="1" selected>Harga rendah - tinggi</option>
                    @else
                    <option value="1">Harga rendah - tinggi</option>
                    @endif
                    @if($sort == 2)
                    <option value="2" selected>Harga tinggi - rendah</option>
                    @else
                    <option value="2">Harga tinggi - rendah</option>
                    @endif
                    @if($sort == 3)
                    <option value="3" selected>Terpopuler</option>
                    @else
                    <option value="3">Terpopuler</option>
                    @endif
                  </select>
                </div>
                <div class="form-group">
                  <h5><b>Harga</b></h5>
                  <div class="row">
                    <div class="col-md-6 batas-rendah">
                      @if(isset($hargaRendah))
                      <input type="text" class="form-control" placeholder="batas rendah" name="hr" value="{{$hargaRendah}}">
                      @else
                      <input type="text" class="form-control" placeholder="batas rendah" name="hr">
                      @endif
                    </div>
                    <div class="min-divider">
                      -
                    </div>
                    <div class="col-md-6 batas-tinggi">
                      @if(isset($hargaTinggi))
                      <input type="text" class="form-control" placeholder="batas rendah" name="ht" value="{{$hargaTinggi}}">
                      @else
                      <input type="text" class="form-control" placeholder="batas rendah" name="ht">
                      @endif
                    </div>
                  </div>
                </div>
                <h5><b>Brand</b></h5>
                <div class="item-box">
                  <table>
                    @foreach($brands as $b)
                    <tr>
                      <td><input type="checkbox" name="brandCheckboxes[]" value="{{$b->value}}"></td>
                      <td>{{$b->value}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                @if($haveMemory == 1)
                <h5><b>MEMORY</b></h5>
                <div class="item-box">
                  <table>
                    @foreach($memories as $m)
                    <tr>
                      <td><input type="checkbox" name="memoryCheckboxes[]" value="{{$m->value}}"></td>
                      <td>{{$m->value}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                @endif
                <div class="form-group ovh">
                  <button type="submit" class="pull-right"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="search-area">
            <form method="GET" action="{{ route('ecommerceSearchProduct') }}" role="search">
              <div class="select-style">
                <span class="arr"></span>
                <select name="c">
                  <option value="0">Pilih Kategori</option>
                  @foreach($categories as $c)
                  @if(isset($sc) && ($sc == $c->id))
                  <option value="{{$c->id}}" selected>{{$c->value}}</option>
                  @else
                  <option value="{{$c->id}}">{{$c->value}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              @if(isset($q))
              <input type="text" name="q" placeholder="Cari barang.." id="search-bar" value="{{$q}}">
              @else
              <input type="text" name="q" placeholder="Cari barang.." id="search-bar">
              @endif
              <button type="submit" id="search-button"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
            </form>
          </div>
          <div class="section-title">
            <div class="h2dec"></div>
            <label><span id="total-search-result">{{ $totalItem }}</span> hasil ditemukan<br>dari pencarian dengan kata kunci "<span id="search-query">{{ $query }}</span>"</label>
            <i class="fa fa-info-circle  fa-lg pull-right" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Gunakan filter pencarian untuk melakukan pencarian dengan hasil maksimal"></i>
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
                    <h5 class="info-product-name">{{$p->name}}</h5>
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


          @if($totalPagination > 0)
            <ul class="pagination">
            @if($src == 'search')
              @if ($startPage > 1)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceSearchProduct', ['q' => $q, 'c' => $sc])}}" >first</a></li>
              @endif
              @for($i=$startPage; $i <= $endPage; $i++)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceSearchProduct', ['q' => $q, 'c' => $sc, 's' => ($i-1)*16, 'p' => $i])}}" >{{$i}}</a></li>
              @endfor
              @if ($endPage < $totalPagination)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceSearchProduct', ['q' => $q, 'c' => $sc, 's' => ($totalPagination-1)*16, 'p' => $totalPagination])}}" >last</a></li>
              @endif
            @else
              @if ($startPage > 1)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceFilterProduct', ['q' => $q, 'c' => $sc, 'sort' => $sort])}}" >first</a></li>
              @endif
              @for($i=$startPage; $i <= $endPage; $i++)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceFilterProduct', ['q' => $q, 'c' => $sc, 'sort' => $sort, 's' => ($i-1)*16, 'p' => $i])}}" >{{$i}}</a></li>
              @endfor
              @if ($endPage < $totalPagination)
                <li class="page-item"><a class="page-link" href="{{route('ecommerceFilterProduct', ['q' => $q, 'c' => $sc, 'sort' => $sort, 's' => ($totalPagination-1)*16, 'p' => $totalPagination])}}" >last</a></li>
              @endif
            @endif

            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>

@endsection

@section('inner-inline-script')
<script>
  $(document).ready(function(){
    $.fn.wrapInTag = function (opts) {
        function getText(obj) {
            return obj.textContent ? obj.textContent : obj.innerText;
        }

        var tag = opts.tag || 'strong',
            words = opts.words || [],
            regex = RegExp(words.join('|'), 'gi'),
            replacement = '<' + tag + '>$&</' + tag + '>';

        $(this).contents().each(function () {
            if (this.nodeType === 3) //Node.TEXT_NODE
            {
                $(this).replaceWith(getText(this).replace(regex, replacement));
            }
            else if (!opts.ignoreChildNodes) {
                $(this).wrapInTag(opts);
            }
        });
    };

    var searchQuery = $('#selected-query').val();
    var words = searchQuery.split(" ");
    $('.info-product-name').wrapInTag({
      tag: 'strong',
      words: words
    });
  });
</script>
@endsection
