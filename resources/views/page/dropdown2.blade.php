@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">

          <div class="card-body">
            <h4 class="header-title">Form List Surat Keluar</h4>
            <div class="data-tables datatable-primary">
          </div>
              <!-- /.box-header -->

              <!-- form start -->
            <form method="post" action="/listsuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No. Surat">
                </div>

                <div class="form-group"></div>
                  <label for="jenissurat">Jenis Surat</label>
                  <select name="jenissurat" class="form-control">
                      @foreach($jenissuratkeluar as $j)
                        <option>{{strtoupper($j->jenissurat)}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>

                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <select name="instansi" class="form-control">
                      @foreach($instansi as $i)
                        <option>{{strtoupper($i->instansi_rekanan)}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="penanggungjawab">Penanggung Jawab</label>
                  <input type="text" class="form-control" id="penanggungjawab" name="penanggungjawab"placeholder="Penanggung Jawab">
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
<!-- page title area end -->

  <!-- page title area end -->
    <div class="main-content-inner">
      <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-4">
          <div class="card">

            <div class="card-body">
              <h4 class="header-title">Data Tabel List Surat Keluar</h4>
              <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No. Surat</th>
                    <th>Jenis Surat</th>
                    <th>Perihal</th>
                    <th>Tujuan</th>
                    <th>Penanggung Jawab</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php 
                      $no = 1;
                      $bulanRomawi  = array("","I","II","III","IV","V","VI","VII","IX","X","XI");  
                  ?>
                  @foreach($listsuratkeluar as $lsk)

                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lsk->no_surat}}</td>
                    <td>{{$lsk->jenissurat}}</td>
                    <td>{{$lsk->perihal}}</td>
                    <td>{{$lsk->tujuan}}</td>
                    <td>{{$lsk->penanggungjawab}}</td>
                    <td>
                        <!-- <a href="/listsuratkeluar/edit/{{ $lsk->id }}" button type="button" class="btn btn-info edit" style="padding-right:80px,width:80px">Edit</a> -->
                        <!-- <a href="/listsuratkeluar/view/{{ $lsk->id }}" button type="button" class="btn btn-warning view" style="padding-right:80px,width:80px">View</a> -->
                        <!-- <a href="/listsuratkeluar/delete/{{ $lsk->id }}" button type="button" class="btn btn-danger delete" style="padding-right:80px,width:80px">Delete</a> -->

                        <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$lsk->id}}">Edit</button>
                        <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$lsk->id}}">View</button>
                        <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$lsk->id}}">Delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>No. Surat</th>
                    <th>Jenis Surat</th>
                    <th>Perihal</th>
                    <th>Tujuan</th>
                    <th>Penanggung Jawab</th>
                    <th>Action</th>
                  </tr>
                </tfoot> 
                </table>
              </div>
            </div>

          </div>
        </div>
        <!-- Primary table end -->
      </div>
    </div>


<!-- Edit Data -->
@foreach($listsuratkeluar as $lsk)
<div class="modal fade" id="Edit{{$lsk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listsuratkeluar/update/{{$lsk->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="no_surat">No. Surat</label>
              <input type="text" class="form-control" value="{{$lsk->no_surat}}" id="no_surat" name="no_surat" placeholder="No. Surat">
            </div>

            <div class="form-group">
              <label for="jenissurat">Jenis Surat</label>
              <input type="text" class="form-control" value="{{$lsk->jenissurat}}" id="jenissurat" name="jenissurat" placeholder="Jenis Surat">
            </div>

            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" value="{{$lsk->perihal}}" id="perihal" name="perihal" placeholder="Perihal">
            </div>

            <div class="form-group">
              <label for="tujuan">Tujuan</label>
              <input type="text" class="form-control" value="{{$lsk->tujuan}}" id="tujuan" name="instansi" placeholder="Tujuan">
            </div>

            <div class="form-group">
              <label for="penanggungjawab">Penanggung Jawab</label>
              <input type="text" class="form-control" value="{{$lsk->penanggungjawab}}" id="penanggungjawab" name="penanggungjawab"placeholder="Penanggung Jawab">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">{{$lsk->keterangan}}</textarea>
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
@foreach($listsuratkeluar as $lsk)
<div class="modal fade" id="View{{$lsk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listsuratkeluar/view/{{$lsk->id}}">
          {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="no_surat">No. Surat</label>
              <input type="text" class="form-control" value="{{$lsk->no_surat}}" id="no_surat" name="no_surat" placeholder="No. Surat" readonly>
            </div>

            <div class="form-group">
              <label for="jenissurat">Jenis Surat</label>
              <input type="text" class="form-control" value="{{$lsk->jenissurat}}" id="jenissurat" name="jenissurat" placeholder="Jenis Surat" readonly>
            </div>

            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" value="{{$lsk->perihal}}" id="perihal" name="perihal" placeholder="Perihal" readonly>
            </div>

            <div class="form-group">
              <label for="tujuan">Tujuan</label>
              <input type="text" class="form-control" value="{{$lsk->tujuan}}" id="tujuan" name="tujuan" placeholder="Tujuan" readonly>
            </div>

            <div class="form-group">
              <label for="penanggungjawab">Penanggung Jawab</label>
              <input type="text" class="form-control" value="{{$lsk->penanggungjawab}}" id="penanggungjawab" name="penanggungjawab"placeholder="Penanggung Jawab" readonly>
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" readonly>{{$lsk->keterangan}}</textarea>
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
@foreach($listsuratkeluar as $lsk)
<div class="modal" id="Delete{{$lsk->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/listsuratkeluar/delete/{{$lsk->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are You Sure Delete This Data {{$lsk->no_surat}}?</p>
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

    <!-- <script>
    window.print();
  </script> -->
@endsection
