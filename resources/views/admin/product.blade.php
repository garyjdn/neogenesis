@extends('layouts.sbadmin')

@section('content')
  <div id="wrapper">
        @component('admin.components.side-navigation')
        @endcomponent

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Produk</h1>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pesanan Baru</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Tabel Pesanan Baru
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="table-produk">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Kategori</th>
                                                        <th>Nama</th>
                                                        <th>Brand</th>
                                                        <th>Memory</th>
                                                        <th>Gambar</th>
                                                        <th>Deskripsi</th>
                                                        <th>Harga</th>
                                                        <th>Rating</th>
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
                                                      <td><img src="{{asset('img/mouselogitech3.png')}}"></td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                        <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>2</td>
                                                      <td>Browser</td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td><img src="{{asset('img/mouselogitech3.png')}}"></td>
                                                      <td>Platform(s)</td>
                                                      <td>Engine version</td>
                                                      <td>CSS grade</td>
                                                      <td>
                                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                        <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
        $('#table-produk').DataTable({
            responsive: true
        });
        alert('<?= $kategori ?>');
    });

</script>
@endsection
