@extends('layouts.sbadmin')

@section('content')
  <div id="wrapper">
        @component('admin.components.side-navigation')
          @slot('returActive')
            class="active"
          @endslot
        @endcomponent

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Retur</h1>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pengajuan Baru</a></li>
                          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terima Barang</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="home">

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="profile">
                            
                          </div>
                        </div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
  </div>
@endsection
