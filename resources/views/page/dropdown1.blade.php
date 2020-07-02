@extends('master.layout')

@section('content')
  <div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>Table Jenis Surat Keluar</b></h3>
    </div>
    <div class="card-body" style="padding:10px">
      <a href="/jenissuratkeluar/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>No. Romawi Jenis Surat</th>
            <th>Inisial Jenis Surat</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
          <?php $no = 1;?>
          @foreach($jenissuratkeluar as $j)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$j->jenissurat}}</td>
            <td>{{$j->noromawijenissurat}}</td>
            <td>{{$j->inisialjenissurat}}</td>
            <td>{{$j->keterangan}}</td>
            <td>
                <a href="/jenissuratkeluar/edit/{{ $j->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                <a href="/jenissuratkeluar/delete/{{ $j->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        
        <tfoot>
          <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>No. Romawi Jenis Surat</th>
            <th>Inisial Jenis Surat</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </tfoot>
        
      </table>
    </div>
    <!-- /.box-body -->
@endsection
