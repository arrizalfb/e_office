@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form List Surat Masuk</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

                <!-- form start -->
                <form method="post" action="/listsuratmasuk/save">
                {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="no_surat">No. Surat</label>
                      <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No. Surat">
                    </div>
                    <div class="form-group">
                      <label for="perihal">Perihal Surat</label>
                      <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal Surat">
                    </div>
                    <div class="form-group">
                      <label for="instansipengirim">Instansi Pengirim</label>
                      <input type="text" class="form-control" id="instansipengirim" name="instansipengirim"placeholder="Perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea rows="7" class="form-control" id="keterangan" name="Keterangan"placeholder="Keterangan"></textarea>
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
            <h4 class="header-title">Data Table List Surat Masuk</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <th>Keterangan</th>
                        <th>Status Surat Masuk</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no = 1;?>
                    @foreach($listsuratmasuk as $lsm)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$lsm->perihal}}</td>
                        <td>{{$lsm->instansipengirim}}</td>
                        <td>{{$lsm->Keterangan}}</td>
                        <td>{{$lsm->statussuratmasuk}}</td>
                        <td>
                            <a href="/listsuratmasuk/edit/{{ $lsm->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listsuratmasuk/view/{{ $lsm->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listsuratmasuk/delete/{{ $lsm->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <td>Keterangan</td>
                        <th>Status Surat Masuk</th>
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