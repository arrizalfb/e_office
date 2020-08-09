@extends('master.layout')

@section('content')

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form Jenis Produk/Layanan</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

              <!-- form start -->
            <form method="post" action="/jenisproduklayanan/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenisproduklayanan">Jenis Produk/Layanan</label>
                  <input type="text" class="form-control" id="jenisproduklayanan" name="jenisproduklayanan" placeholder="Jenis Produk Layanan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Data Table Jenis Produk/Layanan</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk/Layanan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                   <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;?>
                @foreach($jenisproduklayanan as $pl)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pl->jenisproduklayanan}}</td>
                        <td>{{$pl->keterangan}}</td>
                        <td>
                            <a href="/jenisproduklayanan/edit/{{ $pl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/jenisproduklayanan/delete/{{ $pl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk Layanan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection