@extends('master.layout')

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Table Jenis Surat Keluar</b></h3>
              <a href="/jenisproduklayanan/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Produk Layanan</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($jenisproduklayanan as $pl)
                    <tr>
                      <td>{{$pl->id}}</td>
                      <td>{{$pl->jenisproduklayanan}}</td>
                      <td>{{$pl->keterangan}}</td>
                      <td>Action</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                    <th>No</th>
                    <th>Jenis Produk Layanan</th>
                    <th>Keterangan</th>
                    <th>Action</td>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@endsection