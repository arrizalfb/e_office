<center>
  <div class="box">
    <div class="box-header">
        <h1 class="box-title"><b>Table List Tagihan Project</b></h1>
        <p>Tanggal : <?php echo date('d-M-Y') ?></p>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
        <thead>
        	<tr>
                <th>No</th>
                <th>Instansi Rekanan</th>
                <th>Tanggal Tagihan</th>
                <th>Nominal HPP</th>
                <th>Nominal PPN</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Dokument Pelengkap</th>
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