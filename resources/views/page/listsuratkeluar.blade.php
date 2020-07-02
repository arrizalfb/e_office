@extends('master.layout')

@section('content')
  <div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>Table List Surat Keluar</b></h3>
        <a href="/listsuratkeluar/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>No. Surat</th>
            <th>Jenis Surat</th>
            <th>Perihal</th>
            <th>Tujuan</th>
            <th>Perusahaan</th>
            <th>Penanggung Jawab</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
          @foreach($listsuratkeluar as $lsk)
          <tr>
            <td>{{$no}}</td>
            <td>{{$lsk->no_surat}}</td>
            <td>{{$lsk->jenissurat}}</td>
            <td>{{$lsk->perihal}}</td>
            <td>{{$lsk->instansi}}</td>
            <td>{{$lsk->perusahaan}}</td>
            <td>{{$lsk->penanggungjawab}}</td>
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
            <th>Perusahaan</th>
            <th>Penanggung Jawab</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
            <!-- /.box-body -->
@endsection