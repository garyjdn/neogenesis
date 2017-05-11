<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NeoGenesis - Toko Aksesoris Komputer - Murah, Cepat, Berkualitas!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
    @yield('inline-style')
  </head>
  <body>
    <div id="app">
      @yield('app')
    </div>
    <script>
      window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('inline-script')
  </body>
</html>
