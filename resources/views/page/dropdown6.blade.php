@extends('master.layout')

@section('content')
<!-- page title area end -->
<div class="main-content-inner">
  <div class="row">
    <!-- Primary table start -->
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body">
          <h4 class="header-title">Status Data Table List Surat Masuk</h4>
          <div class="data-tables dataTables_wrapper datatable-primary">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No. Surat</th>
                  <th>Perihal</th>
                  <th>Instansi Pengirim</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Keterangan Status</th>
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
                  <td>{{$lsm->statussuratmasuk}}</td>
                  <td>{{$lsm->keteranganstatus}}</td>
                  <td>
                    <!-- <a href="/listsuratmasuk/edit/{{ $lsm->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a> -->
                    <!-- <a href="/listsuratmasuk/view/{{ $lsm->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a> -->
                    <!-- <a href="/listsuratmasuk/delete/{{ $lsm->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->

                    <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$lsm->id}}">Edit</button>
                    <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$lsm->id}}">View</button>

                    
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
                  <th>Status</th>
                  <th>Keterangan Status</th>
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

      <script>
          function tampilkan(){
            var nama_kota=document.getElementById("form2").detail.value;
            if (nama_kota=="Dibalas"){
                  document.getElementById("tampil").innerHTML=
                  "<input type='text' id='nosurat' class='form-control'name='nosurat' placeholder='Masukkan No. Surat'>";
            }else{
                  document.getElementById("tampil").innerHTML="";
            }
          }
      </script>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="form2" method="post" action="/listsuratmasuk/status/{{$lsm->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label>Pilih Kategori: </label>
                <select id="detail" name="statusuratkeluar" class="form-control" onchange="tampilkan()">
                  <option>Diterima</option>
                  <option value="Dibalas">Dibalas</option>
                </select>
            </div>
            
            <div class="form-group">
                <p id="tampil"></p>
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
              <label for="statussuratkeluar">Status Surat Masuk</label>
              <input type="text" class="form-control" value="{{$lsm->statussuratmasuk}}" id="statussuratkeluar" name="no_surat" placeholder="Status Surat Masuk" readonly>
            </div>

            <div class="form-group">
              <label for="statussuratkeluar">Keterangan Surat Masuk</label>
              <input type="text" class="form-control" value="{{$lsm->keteranganstatus}}" id="statussuratkeluar" name="no_surat" placeholder="Keterangan Surat Keluar" readonly>
            </div>

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

@endsection