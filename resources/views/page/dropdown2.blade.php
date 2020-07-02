@extends('master.layout')

@section('content')
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
            <th>Perihal</th>
            <th>Tujuan</th>
            <th>Perusahaan</th>
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
            <td>{{$lsk->perihal}}</td>
            <td>{{$lsk->tujuan}}</td>
            <td>{{$lsk->perusahaan}}</td>
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
            <th>Perihal</th>
            <th>Tujuan</th>
            <th>Perusahaan</th>
            <th>Penanggung Jawab</th>
            <th>Status Surat Keluar</th>
            <th>Action</th>
          </tr>
        </tfoot>
        
      </table>
    </div>
    <!-- /.box-body -->
@endsection
