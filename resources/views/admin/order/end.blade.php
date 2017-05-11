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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pesanan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pesanan Selesai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
        <!-- /#page-wrapper -->
  </div>
@endsection

@section('inline-script')
<script>
  $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
@endsection
