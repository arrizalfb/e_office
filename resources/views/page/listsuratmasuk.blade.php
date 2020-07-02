@extends('master.layout')

@section('content')
  <div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>Table List Surat Masuk</b></h3>
        <a href="/listsuratmasuk/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>No. Surat</th>
            <th>Perihal</th>
            <th>Instansi Pengirim</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listsuratmasuk as $lsm)
          <tr>
            <td>{{$lsm->id}}</td>
            <td>{{$lsm->no_surat}}</td>
            <td>{{$lsm->perihal}}</td>
            <td>{{$lsm->instansipengirim}}</td>
            <td>{{$lsm->keterangan}}</td>
            <td>Action</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Perihal</th>
            <th>No. Surat</th>
            <th>Instansi Pengirim</th>
            <th>Keterangan</th>
            <th>Action</td>
          </tr>
        </tfoot>
      </table>
    </div>
            <!-- /.box-body -->
@endsection