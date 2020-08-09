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
              <table id="dataTable2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Tujuan</th>
                    <th>Penanggung Jawab</th>
                    <th>Status Surat Keluar</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                      $no = 1;
                      $bulanRomawi  = array("","I","II","III","IV","V","VI","VII","IX","X","XI");  
                  ?>
                  @foreach($laporanlistsuratkeluar as $lsk)

                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lsk->jenissurat}}</td>
                    <td>{{$lsk->tujuan}}</td>
                    <td>{{$lsk->penanggungjawab}}</td>
                    <td>{{$lsk->statussuratkeluar}}</td>
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
@endsection