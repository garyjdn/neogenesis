<!-- Navigation -->

  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">NeoGenesis Admin Panel</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              @if(isset($orderActive))
                <li {{ $orderActive }}>
              @else
                <li>
              @endif
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Pesanan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('indexOrder')}}"> Pesanan Masuk</a></li>
                        <li><a href="{{route('packingOrderSection')}}"> Pengepakan dan Pengiriman</a></li>
                        <li><a href="{{route('endOrderSection')}}"> Pesanan Selesai</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
              @if(isset($returActive))
                <li {{ $returActive }}>
              @else
                <li>
              @endif
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Retur<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('indexRetur')}}"> Pengajuan Retur</a></li>
                        <li><a href="morris.html"> Service</a></li>
                        <li><a href="morris.html"> Pengepakan dan Pengiriman</a></li>
                        <li><a href="morris.html"> Pesanan Selesai</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{route('indexProduct')}}"><i class="fa fa-table fa-fw"></i> Produk</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Kategori</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-envelope fa-fw"></i> Email Promotion</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-users fa-fw"></i> Owner Area</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>
