@extends('layouts.ecommerce')

@section('inner-app')
  <div id="content">
      <div class="login-area">
        <div class="login-box">

          <h2><b>Daftar</b></h2>
          <hr>
          <form method="POST" action="{{route('ecommerceRegister')}}">
            <div class="form-group">
              <label><b>Nama</b></label>
              <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Budi" required>
            </div>
            <div class="form-group">
              <label><b>Email</b></label>
              <input type="email" name="email" class="form-control" autocomplete="off" placeholder="budi@mail.com" required>
            </div>
            <div class="form-group">
              <label><b>Password</b></label>
              <input type="password" name="password" class="form-control" autocomplete="off" placeholder="********" required>
            </div>
            <div class="form-group">
              <label><b>Retype-Password</b></label>
              <input type="password" name="retype-password" class="form-control" autocomplete="off" placeholder="********" required>
            </div>
            <div class="form-group">
              <label><b>Tanggal Lahir</b></label>
              <div class="input-group date" data-provide="datepicker" placeholder="mm/dd/yyyy">
                  <input type="text" id="datepicker" class="form-control" name="tanggal-lahir" required>
                  <div class="input-group-addon addon-datepicker" id="addon-datepicker">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label><b>Nomor HP</b></label>
              <input type="text" name="hp" class="form-control" placeholder="081xxxxxxx">
            </div>
            <div class="form-group">
              <label><b>Gender</b></label>
              <select name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label class="sk-checkbox"><input type="checkbox" name="sk"> Dengan ini saya menyetujui <a href="#" target="_BLANK"><u>Syarat dan Ketentuan</u></a> yang berlaku</label>
              </div>
              <button type="submit" name="submit" class="form-control"><b>Daftar</b></button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <div class="dark-filter"></div>
      </div>
    </div>
  </div>

<!-- @if (count($errors) > 0)
  div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif -->

@endsection

@section('inner-inline-script')

  @if (count($errors) > 0)
  <script>
    swal({
      title: 'Oops..',
      type: 'error',
      html:
        '<ul>'+
      @foreach ($errors->all() as $error)
          '<li>{{ $error }}</li>'+
      @endforeach
        '</ul>',
      showCloseButton: true,
      confirmButtonText:
        'close'
    })
  </script>
  @endif

@endsection
