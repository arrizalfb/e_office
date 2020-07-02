@extends('master.layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Tagihan Produk/Layanan</b></h3>
            <a href="/listtagihanproduklayanan/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($listtagihanproduklayanan as $ltpl)
                    <tr>
                        <td>{{$ltpl->id}}</td>
                        <td>{{$ltpl->instansirekanan}}</td>
                        <td>{{$ltpl->bulantagihan}}</td>
                        <td>{{$ltpl->tanggaltagihan}}</td>
                        <td>{{$ltpl->nominalhpp}}</td>
                        <td>{{$ltpl->tanggaljatuhtempo}}</td>
                        <td>{{$ltpl->dokumentpelengkap}}</td>
                        <td>{{$ltpl->keterangan}}</td>
                        <td>Action</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Keterangan</th>
                    </tr>
                </tfoot>
            </table>
        </div>
            <!-- /.box-body -->
@endsection