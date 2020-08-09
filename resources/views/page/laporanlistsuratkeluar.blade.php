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
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Tujuan</th>
                    <th>Penanggung Jawab</th>
                    <th>Status Surat Keluar</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                      $no = 1;
                      $bulanRomawi  = array("","I","II","III","IV","V","VI","VII","IX","X","XI");  
                  ?>
                  @foreach($listsuratkeluar as $lsk)

                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lsk->jenissurat}}</td>
                    <td>{{$lsk->tujuan}}</td>
                    <td>{{$lsk->penanggungjawab}}</td>
                    <td>{{$lsk->statussuratkeluar}}</td>
                    <!-- <td> -->
                        <!-- <a href="/laporan/listsuratkeluar/view/{{ $lsk->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a> -->
                        <!-- <a href="/laporan/listsuratkeluar/cetaksatu/{{ $lsk->id }}" target="_blank" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Cetak</a> -->
                    <!-- </td> -->
                  </tr>
                  @endforeach
                </tbody>

                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Tujuan</th>
                    <th>Penanggung Jawab</th>
                    <th>Status Surat Keluar</th>
                    <th>Action</th>
                  </tr>
                </tfoot> 
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection