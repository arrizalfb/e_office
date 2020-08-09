@extends('master.layout')

@section('content')

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form Jenis Surat Keluar</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

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
                   ?>

                   <!-- Nomor Urut / Inisial Divisi . Nomor Urut Jenis Surat / Inisial Jenis Surat / Bulan Dikeluarkan Surat / Tahun Dikeluarkan Suraf -->
                  <input type="text" class="form-control" value="{{$max.'/A//KKP/'.$rom.'/'.date('Y')}}"id="noromawijenissurat" name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="inisial">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" id="inisial" name="inisialjenissurat"placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="ket" placeholder="Keterangan"></textarea> 
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
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Data Table Jenis Surat Keluar</h4>
            <div class="data-tables datatable-primary">
              <table id="dataTable2" class="text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>No. Romawi Jenis Surat</th>
                    <th>Inisial Jenis Surat</th>
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
                    <td>
                      <a href="/jenissuratkeluar/edit/{{ $j->id }}" button type="button" class="btn btn-info badge-pill, fa fa-edit" style="padding-right:80px,width:80px">Edit</a>
                      <a href="/jenissuratkeluar/delete/{{ $j->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Primary table end -->
    </div>
  </div>
@endsection
