@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Jenis Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/jenissuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" id="jenissurat" name="suratjenis" placeholder="Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="noromawijenissurat">No. Romawi Jenis Surat</label>
                  <?php

if (date('m')=='01') {
  $rom = "01";
}elseif (date('m')=='02') {
  $rom = "02";
}elseif (date('m')=='03') {
  $rom = "03";
}elseif (date('m')=='04') {
  $rom = "04";
}elseif (date('m')=='05') {
  $rom = "05";
}elseif (date('m')=='06') {
  $rom = "06";
}elseif (date('m')=='07') {
  $rom = "07";
}elseif (date('m')=='08') {
  $rom = "08";
}elseif (date('m')=='09') {
  $rom = "09";
}elseif (date('m')=='10') {
  $rom = "10";
}elseif (date('m')=='11') {
  $rom = "11";
}elseif (date('m')=='12') {
  $rom = "12";
}

if (strlen($max)==1) {
  $max = '000'.$max;
}elseif (strlen($max)==2) {
  $max = '00'.$max;
}elseif (strlen($max)==3) {
  $max = '0'.$max;
}elseif (strlen($max)==4) {
  $max = $max;
}
?>
<input type="text" class="form-control" value="{{$max.'/A//KKP/'.$rom.'/'.date('Y')}}"id="noromawijenissurat" name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="inisial">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" id="inisial" name="inisialjenissurat"placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="ket" placeholder="Keterangan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/jenissuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>

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
@endsection
