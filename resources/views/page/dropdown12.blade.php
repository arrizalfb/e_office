@extends('master.layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Tagihan Project</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
            <a href="/listtagihanproject/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;?>

                    @foreach($listtagihanproject as $ltp)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ltp->instansirekanan}}</td>
                        <td>{{$ltp->tanggaltagihan}}</td>
                        <td>{{$ltp->nominalhpp}}</td>
                        <td>{{$ltp->ppn}}</td>
                        <td>{{$ltp->tanggaljatuhtempo}}</td>
                        <td><img src="{{asset('/storage/'.$ltp->dokumentpelengkap)}}" height="100" width="100"></td>
                        <td>
                            <a href="/listtagihanproject/edit/{{ $ltp->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listtagihanproject/view/{{ $ltp->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listtagihanproject/delete/{{ $ltp->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

            </table>
        </div>
            <!-- /.box-body -->
@endsection