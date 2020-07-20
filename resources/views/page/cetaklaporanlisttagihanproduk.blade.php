<center>
  <div class="box">
    <div class="box-header">
        <h1 class="box-title"><b>Table List Tagihan Produk/Layanan</b></h1>
        <p>Tanggal : <?php echo date('d-M-Y') ?></p>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
        <thead>
        	<tr>
                <th>No</th>
                <th>Instansi Rekanan</th>
                <th>Bulan Tagihan</th>
                <th>Tanggal Tagihan</th>
                <th>Nominal HPP</th>
                <th>Nominal PPN</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Dokument Pelengkap</th>
            </tr>
        </thead>
        <tbody>
            <!-- untuk  nomor urut otomatis -->
            <?php $no = 1;
                $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember')
            ?>

            @foreach($listtagihanproduklayanan as $ltpl)
            <tr>
                <td align="center">{{$no++}}</td>
                <td align="center">{{$ltpl->instansirekanan}}</td>
                <td align="center">{{$bulan[date('m', strtotime($ltpl->tanggaltagihan))]}}</td>
                <td align="center">{{$ltpl->tanggaltagihan}}</td>
                <td align="center">{{$ltpl->nominalhpp}}</td>
                <td align="center">{{$ltpl->ppn}}</td>
                <td align="center">{{$ltpl->tanggaljatuhtempo}}</td>
                <td align="center"><img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" height="100" width="100"></td>
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