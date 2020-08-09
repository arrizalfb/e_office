@extends('master.layout')

@section('content')
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Laporan List Surat Keluar</h4>
            <div class="data-tables datatable-primary">
              <table id="dataTable2" class="text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Surat</th>
                        <th>Perihal</th>
                        <th>Instansi Pengirim</th>
                        <th>Status Surat Masuk</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no = 1;?>
                    @foreach($laporanlistsuratmasuk as $lsm)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$lsm->no_surat}}</td>
                        <td>{{$lsm->perihal}}</td>
                        <td>{{$lsm->instansipengirim}}</td>
                        <td>{{$lsm->statussuratmasuk}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
         <!-- /.box-body -->
@endsection