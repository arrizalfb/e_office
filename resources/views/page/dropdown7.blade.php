@extends('master.layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table Jenis Produk/Layanan</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
            <a href="/jenisproduklayanan/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk/Layanan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                   <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;?>
                @foreach($jenisproduklayanan as $pl)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pl->jenisproduklayanan}}</td>
                        <td>{{$pl->keterangan}}</td>
                        <td>
                            <a href="/jenisproduklayanan/edit/{{ $pl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/jenisproduklayanan/delete/{{ $pl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk Layanan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

            </table>
        </div>
            <!-- /.box-body -->
@endsection