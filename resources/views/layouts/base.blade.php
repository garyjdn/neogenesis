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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5903c99064f23d19a89afd00/1bgbass0e';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    @yield('inline-script')
  </body>
</html>
