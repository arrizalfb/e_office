@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/listsuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <select name="jenissurat" class="form-control">
                      @foreach($jenissurat as $j)
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
                <a href="/listsuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>

<div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>Table List Surat Keluar</b></h3>
    </div>
    <div class="card-body" style="padding:10px">
      <a href="/listsuratkeluar/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>Tujuan</th>
            <th>Penanggung Jawab</th>
            <th>Status Surat Keluar</th>
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
              <td>{{$lsk->jenissurat}}</td>
              <td>{{$lsk->tujuan}}</td>
              <td>{{$lsk->penanggungjawab}}</td>
              <td>{{$lsk->statussuratkeluar}}</td>
              <td>
                  <a href="/listsuratkeluar/edit/{{ $lsk->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                  <a href="/listsuratkeluar/view/{{ $lsk->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                  <a href="/listsuratkeluar/delete/{{ $lsk->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
        
        <tfoot>
          <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>Tujuan</th>
            <th>Penanggung Jawab</th>
            <th>Status Surat Keluar</th>
            <th>Action</th>
          </tr>
        </tfoot> 
      </table>
    </div>
@endsection
