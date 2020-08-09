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
                <!-- End form start -->

              <!-- /.end box header -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Primary table start -->
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
                  <th>No. Surat</th>
                  <th>Perihal</th>
                  <th>Instansi Pengirim</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php $no = 1;?>
                  @foreach($listsuratmasuk as $lsm)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$lsm->no_surat}}</td>
                  <td>{{$lsm->perihal}}</td>
                  <td>{{$lsm->instansipengirim}}</td>
                  <td>{{$lsm->Keterangan}}</td>
                  <td>
                    <!-- <a href="/listsuratmasuk/edit/{{ $lsm->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a> -->
                    <!-- <a href="/listsuratmasuk/view/{{ $lsm->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a> -->
                    <!-- <a href="/listsuratmasuk/delete/{{ $lsm->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->

                    <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$lsm->id}}">Edit</button>
                    <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$lsm->id}}">View</button>
                    <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$lsm->id}}">Delete</button>

                    
                  </td>
                </tr>
                  @endforeach
              </tbody>

              <tfoot>
                <tr>
                  <th>No</th>
                  <th>No. Surat</th>
                  <th>Perihal</th>
                  <th>Instansi Pengirim</th>
                  <td>Keterangan</td>
                  <th>Action</th>
                </tr>
              </tfoot>

            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- end Primary table start -->
  </div>
</div>


<!-- Edit Data -->
@foreach($listsuratmasuk as $lsm)
<!-- Modal -->
<div class="modal fade" id="Edit{{$lsm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listsuratmasuk/update/{{$lsm->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="no_surat">No. Surat</label>
              <input type="text" class="form-control" value="{{$lsm->no_surat}}" id="no_surat" name="no_surat" placeholder="No. Surat">
            </div>

            <div class="form-group">
              <label for="perihal">Perihal Surat</label>
              <input type="text" class="form-control" value="{{$lsm->perihal}}" id="perihal" name="perihal" placeholder="Perihal Surat">
            </div>

            <div class="form-group">
              <label for="instansipengirim">Instansi Pengirim</label>
              <input type="text" class="form-control" value="{{$lsm->instansipengirim}}" id="instansipengirim" name="instansipengirim"placeholder="Perusahaan">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="Keterangan"placeholder="Keterangan">{{$lsm->Keterangan}}</textarea>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endforeach


<!-- View Data -->
@foreach($listsuratmasuk as $lsm)
<!-- Modal -->
<div class="modal fade" id="View{{$lsm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listsuratmasuk/view/{{$lsm->id}}">
          {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="no_surat">No. Surat</label>
              <input type="text" class="form-control" value="{{$lsm->no_surat}}" id="no_surat" name="no_surat" placeholder="No. Surat" readonly>
            </div>

            <div class="form-group">
              <label for="perihal">Perihal Surat</label>
              <input type="text" class="form-control" value="{{$lsm->perihal}}" id="perihal" name="perihal" placeholder="Perihal Surat" readonly>
            </div>

            <div class="form-group">
              <label for="instansipengirim">Instansi Pengirim</label>
              <input type="text" class="form-control" value="{{$lsm->instansipengirim}}" id="instansipengirim" name="instansipengirim"placeholder="Perusahaan" readonly>
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="Keterangan"placeholder="Keterangan" readonly>{{$lsm->Keterangan}}</textarea>
            </div>
            <!-- /.box-body -->

          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endforeach


<!-- Delete Data -->
@foreach($listsuratmasuk as $lsm)
<div class="modal" id="Delete{{ $lsm->id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/listsuratmasuk/delete/{{$lsm->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data {{$lsm->perihal}}?</p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endforeach

@endsection