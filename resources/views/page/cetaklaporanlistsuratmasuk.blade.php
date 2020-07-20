<center>
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><b>Table List Surat Masuk</b></h3>
        <p>Tanggal : <?php echo date('d-M-Y') ?></p>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
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
            @foreach($listsuratmasuk as $lsm)
          <tr> 
            <td align="center">{{$no++}}</td>
            <td align="center">{{$lsm->no_surat}}</td>
            <td align="center">{{$lsm->perihal}}</td>
            <td align="center">{{$lsm->instansipengirim}}</td>
            <td align="center">{{$lsm->statussuratmasuk}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</center>
<script>
  window.print();
</script>