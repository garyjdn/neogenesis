@extends('layouts.sbadmin')

@section('content')
  <div id="wrapper">
        @component('admin.components.side-navigation')
          @slot('orderActive')
            class="active"
          @endslot
        @endcomponent

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pesanan</h1>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Packing</a></li>
                          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pengiriman</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Tabel Packing
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="table-packing">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>ID Order</th>
                                                        <th>User</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>Browser</td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Packing</button>
                                                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-search"></i> Detail</button>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>2</td>
                                                      <td>Browser</td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Packing</button>
                                                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-search"></i> Detail</button>
                                                      </td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="profile">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Tabel Pengiriman
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="table-pengiriman">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>ID Order</th>
                                                        <th>User</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>Browser</td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Packing</button>
                                                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-search"></i> Detail</button>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>2</td>
                                                      <td>Browser</td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Packing</button>
                                                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-search"></i> Detail</button>
                                                      </td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

@section('inline-script')
<script>
  $(document).ready(function() {
        $('#table-packing').DataTable({
            responsive: true
        });
        $('#table-pengiriman').DataTable({
            responsive: true
        });
    });
</script>
@endsection
