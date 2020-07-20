<center>
  <div class="box">
    <div class="box-header">
        <h1 class="box-title"><b>Table List Faktur Pajak</b></h1>
        <p>Tanggal : <?php echo date('d-M-Y') ?></p>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
        <thead>
        	<tr>
                <th>No</th>
                <th>No. Faktur Pajak</th>
                <th>Tanggal Faktur Pajak</th>
                <th>No. Kwitansi</th>
                <th>No. Invoice</th>
                <th>Perihal</th>
                <th>Instansi Rekanan</th>
                <th>NPWP Instansi Rekanan</th>
                <th>Bulan Pajak</th>
                <th>Nominal HPP</th>
                <th>Nominal PPN</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;?>

            @foreach($listfakturpajak as $lfp)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$lfp->nofakturpajak}}</td>
                <td>{{$lfp->tanggalfakturpajak}}</td>
                <td>{{$lfp->nokwitansi}}</td>
                <td>{{$lfp->noinvoice}}</td>
                <td>{{$lfp->perihal}}</td>
                <td>{{$lfp->instansirekanan}}</td>
                <td>{{$lfp->npwp}}</td>
                <td>{{$lfp->bulanpajak}}</td>
                <td>{{$lfp->nominalhpp}}</td>
                <td>{{$lfp->nominalppn}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</center>

    <!-- Untuk Cetak -->
    <script>
      window.print();
    </script>