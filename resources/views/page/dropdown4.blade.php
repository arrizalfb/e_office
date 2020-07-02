@extends('master.layout')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Surat Masuk</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
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
                        <th>Status Surat Masuk</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no = 1;?>
                    @foreach($listsuratmasuk as $lsm)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$lsm->no_surat}}</td>
                        <td>{{$lsm->perihal}}</td>
                        <td>{{$lsm->instansipengirim}}</td>
                        <td>{{$lsm->statussuratmasuk}}</td>
                        <td>
                            <a href="/listsuratmasuk/edit/{{ $lsm->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listsuratmasuk/view/{{ $lsm->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listsuratmasuk/delete/{{ $lsm->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <th>Status Surat Masuk</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

            </table>
        </div>
            <!-- /.box-body -->
@endsection