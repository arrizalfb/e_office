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
              <!-- /.box-header -->

              <!-- form start -->
            <form method="post" action="/listsuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No. Surat">
                </div>
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
  </div>
</div>
<!-- page title area end -->


  
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-16 mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Data Table List Surat Keluar</h4>
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
                        <a href="/listsuratkeluar/edit/{{ $lsk->id }}" button type="button" class="btn btn-info edit" style="padding-right:80px,width:80px">Edit</a>
                        <a href="/listsuratkeluar/view/{{ $lsk->id }}" button type="button" class="btn btn-warning view" style="padding-right:80px,width:80px">View</a>
                        <a href="/listsuratkeluar/delete/{{ $lsk->id }}" button type="button" class="btn btn-danger delete" style="padding-right:80px,width:80px">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Primary table end -->


  <!-- <div id="edit<?php  $id ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <input type="text" name="jenissurat" value="<?php  $jenissurat; ?>" placeholder="Jenis Surat" required>
            <input type="text" name="perihal" value="<?php  $perihal; ?>" placeholder="Perihal" required>
            <input type="text" name="instansi" value="<?php  $instansi; ?>" placeholder="Tujuan" required>
            <input type="text" name="penanggungjawab" value="<?php  $penanggungjawab; ?>" placeholder="Penanggung Jawab" required>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->


    <!-- <script>
    window.print();
  </script> -->
@endsection
