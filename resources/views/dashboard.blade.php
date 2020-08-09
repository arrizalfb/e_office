@extends('master.layout')


@section('content')

<!--untuk diagram list surat keluar-->
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
                text: 'Jenis Surat Keluar Perbulan'
              },
              xAxis: {
                categories: <?php echo $month ?>,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Per Buah'
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
                text: 'List Tagihan Produk Layanan Perbulan'
              },
              xAxis: {
                categories: <?php echo $nilais ?>,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Per Buah'
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
                text: 'List Faktur Pajak Perbulan'
              },
              xAxis: {
                categories: <?php echo $nilais ?>,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Per Buah'
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
<section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->

          <!--BOX-->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Table List Surat Keluar</b></h3>
            </div>

            <!--BOX BODY-->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Penanggung Jawab</th>
                    <th>Status Surat Keluar</th>
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
                    <td>{{$lsk->penanggungjawab}}</td>
                    <td>{{$lsk->statussuratkeluar}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Penanggung Jawab</th>
                    <th>Status Surat Keluar</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Table List Surat Masuk</b></h3>
            </div>
            <!--BOX-->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Table Jenis Produk/Layanan</b></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Table List Tagihan Project</b></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Tanggal Jatuh Tempo</th>
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
                        <td>{{$ltp->tanggaljatuhtempo}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Tanggal Jatuh Tempo</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

</section>
    <!-- /.content -->
	@endsection