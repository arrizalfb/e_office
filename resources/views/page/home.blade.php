@extends('master.layout')


@section('content')

<!--untuk diagram list surat keluar-->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!--BOX-->
          <div class="box box-primary">
            <!--BOX BODY-->
            <div class="box-body">
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>
              <script src="https://code.highcharts.com/modules/accessibility.js"></script>

              <style type="text/css">
                .highcharts-figure, .highcharts-data-table table {
                  min-width: 310px; 
                  max-width: 800px;
                  margin: 1em auto;
                }
                #container {
                  height: 400px;
                }
                .highcharts-data-table table {
                  font-family: Verdana, sans-serif;
                  border-collapse: collapse;
                  border: 1px solid #EBEBEB;
                  margin: 10px auto;
                  text-align: center;
                  width: 100%;
                  max-width: 500px;
                }
                .highcharts-data-table caption {
                  padding: 1em 0;
                  font-size: 1.2em;
                  color: #555;
                }
                .highcharts-data-table th {
                  font-weight: 600;
                  padding: 0.5em;
                }
                .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                  padding: 0.5em;
                }
                .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                  background: #f8f8f8;
                }
                .highcharts-data-table tr:hover {
                  background: #f1f7ff;
                }
              </style>

              <!--Grafik1-->
              <?php 
              // Diagram Data
                  $data = array();
                  $month = array();
                foreach($jenissuratkeluar as $jsk){
                   $data[] = $jsk->data; 
                   $month[] = $jsk->month;
                }
                
                $data = json_encode($data);
                $month = json_encode($month); 
              // End Diagram Data
              ?>
              <figure class="highcharts-figure">
                <div id="container"></div>
              </figure>

              <script type="text/javascript">
                Highcharts.chart('container', {
                  chart: {
                    type: 'column'
                  },
                  title: {
                    text: 'Grafik Surat Keluar'
                  },
                  xAxis: {
                    categories: <?php echo $month ?>,
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: 'Jumlah Instansi'
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f} buah</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  series: [ {
                    name: 'Jenis Surat Keluar',
                    data: <?php echo $data ?>
                  }]
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!--BOX-->
          <div class="box box-primary">
            <!--BOX BODY-->
            <div class="box-body">
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>
              <script src="https://code.highcharts.com/modules/accessibility.js"></script>

              <style type="text/css">
                .highcharts-figure, .highcharts-data-table table {
                  min-width: 310px; 
                  max-width: 800px;
                  margin: 1em auto;
                }
                #container {
                  height: 400px;
                }
                .highcharts-data-table table {
                  font-family: Verdana, sans-serif;
                  border-collapse: collapse;
                  border: 1px solid #EBEBEB;
                  margin: 10px auto;
                  text-align: center;
                  width: 100%;
                  max-width: 500px;
                }
                .highcharts-data-table caption {
                  padding: 1em 0;
                  font-size: 1.2em;
                  color: #555;
                }
                .highcharts-data-table th {
                  font-weight: 600;
                  padding: 0.5em;
                }
                .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                  padding: 0.5em;
                }
                .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                  background: #f8f8f8;
                }
                .highcharts-data-table tr:hover {
                  background: #f1f7ff;
                }
              </style>

              <!--Grafik2-->
              <?php 
              // Diagram Data
                  $nilai = array();
                  $bulan = array();
                foreach($listtagihanproduklayanan as $ltpl){
                   $nilai[] = $ltpl->data; 
                   $bulan[] = $ltpl->month;
                }
                
                $nilai = json_encode($nilai);
                $nilais = json_encode($bulan); 
              // End Diagram Data
              ?>
              <figure class="highcharts-figure">
                <div id="containers"></div>
              </figure>

              <script type="text/javascript">
                Highcharts.chart('containers', {
                  chart: {
                    type: 'column'
                  },
                  title: {
                    text: 'Grafik List Tagihan Produk Layanan'
                  },
                  xAxis: {
                    categories: <?php echo $nilais ?>,
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: 'Jumlah Tagihan'
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f} buah</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  series: [ {
                    name: 'List Tagihan Produk Layanan',
                    data: <?php echo $nilai ?>
                  }]
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <!--BOX-->
          <div class="box box-primary">
            <!--BOX BODY-->
            <div class="box-body">
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>
              <script src="https://code.highcharts.com/modules/accessibility.js"></script>

              <style type="text/css">
                .highcharts-figure, .highcharts-data-table table {
                  min-width: 310px; 
                  max-width: 800px;
                  margin: 1em auto;
                }
                #container {
                  height: 400px;
                }
                .highcharts-data-table table {
                  font-family: Verdana, sans-serif;
                  border-collapse: collapse;
                  border: 1px solid #EBEBEB;
                  margin: 10px auto;
                  text-align: center;
                  width: 100%;
                  max-width: 500px;
                }
                .highcharts-data-table caption {
                  padding: 1em 0;
                  font-size: 1.2em;
                  color: #555;
                }
                .highcharts-data-table th {
                  font-weight: 600;
                  padding: 0.5em;
                }
                .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                  padding: 0.5em;
                }
                .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                  background: #f8f8f8;
                }
                .highcharts-data-table tr:hover {
                  background: #f1f7ff;
                }
              </style>

              <!--Grafik3-->
              <?php 
              // Diagram Data
                  $nilai = array();
                  $bulan = array();
                foreach($listfakturpajak as $lfp){
                   $nilai[] = $lfp->data; 
                   $bulan[] = $lfp->month;
                }
                
                $nilai = json_encode($nilai);
                $nilais = json_encode($bulan); 
              // End Diagram Data
              ?>
              <figure class="highcharts-figure">
                <div id="containerss"></div>
              </figure>

              <script type="text/javascript">
                Highcharts.chart('containerss', {
                  chart: {
                    type: 'column'
                  },
                  title: {
                    text: 'List Faktur Pajak'
                  },
                  xAxis: {
                    categories: <?php echo $nilais ?>,
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: 'Jumlah Pajak'
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f} buah</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  series: [ {
                    name: 'List Faktur Pajak',
                    data: <?php echo $nilai ?>
                  }]
                });
              </script>
            </div>
              <!-- /.box -->
        </div>
        <!--sampai sini-->
      </div>
    </div>
  </div>
</div>

<div class="main-content-inner">
  <div class="row">
    <!-- data table start -->
    <!-- Primary table start -->
    <div class="col-12 mt-5">
      <div class="card">
        <div class="card-body">
          <h4 class="header-title">Data List Surat Keluar</h4>
          <div class="data-tables datatable-primary">
            <table id="dataTable2" class="text-center">
              <thead class="text-capitalize">
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
                    <th>Action</th>
                  </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Primary table end -->
  </div>
</div>


<!-- Progress Table start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Data List Surat Keluar</h4>
        <div class="single-table">
          <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
              <table id="example1" class="table table-bordered table-striped">
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
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- Progress Table end -->

   <!-- Progress Table start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Data List Surat Masuk</h4>
        <div class="single-table">
          <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
              <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Perihal</th>
                      <th>Instansi Pengirim</th>
                      <th>Status Surat Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    @foreach($listsuratmasuk as $lsm)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$lsm->perihal}}</td>
                      <td>{{$lsm->instansipengirim}}</td>
                      <td>{{$lsm->statussuratmasuk}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Perihal</th>
                      <th>Instansi Pengirim</th>
                      <th>Status Surat Masuk</th>
                    </tr>
                  </tfoot>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- Progress Table end -->

   <!-- Progress Table start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Data Jenis Produk/Layanan</h4>
        <div class="single-table">
          <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Produk/Layanan</th>
                    <th>Keterangan</th>
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
                  </tr>
                  @endforeach
                </tbody>
                 <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Jenis Produk Layanan</th>
                    <th>Keterangan</th>
                 </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- Progress Table end -->
	@endsection