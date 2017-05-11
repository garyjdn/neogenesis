<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="NeoGenesis">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>NeoGenesis</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('css/dataTables.responsive.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

  @yield('content')

  <!-- jQuery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{asset('js/metisMenu.min.js')}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
  <!-- DataTables JavaScript -->
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('js/dataTables.responsive.js')}}"></script>

  @yield('inline-script')
</body>
</html>
