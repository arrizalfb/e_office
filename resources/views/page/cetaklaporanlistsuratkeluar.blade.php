<center>
  <div class="box">
    <div class="box-header">
        <h1 class="box-title"><b>Table List Surat Keluar</b></h1>
        <p>Tanggal : <?php echo date('d-M-Y') ?></p>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
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
          @foreach($listsuratkeluar as $lsk)

          <tr>
            <td align="center">{{$no++}}</td>
            <td align="center">{{$lsk->jenissurat}}</td>
            <td align="center">{{$lsk->tujuan}}</td>
            <td align="center">{{$lsk->penanggungjawab}}</td>
            <td align="center">{{$lsk->statussuratkeluar}}</td>
          </tr>
          @endforeach
        </tbody> 
      </table>
    </div>
    </center>
    <script>
      window.print();
    </script>