<center>
		<div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Laporan Surat Masuk</b></h3>
      </div>
        <!-- /.box-header -->
        <!-- form start -->
      <form method="post" action="/laporan/listsuratmasuk/save">
      {{ csrf_field() }}
        <div class="box-body">
          <table id="example1" border="1" width="100%" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th><label for="statussurat">Status Surat Masuk</label></th>
                <th><label for="no_surat">No. Surat</label></th>
                <th><label for="perihal">Perihal</label></th>
                <th><label for="instansipengirim">Instansi Pengirim</label></th>
                <th><label for="keterangan">Keterangan</label></th>
            </thead>
            <tbody>
              <tr>
                <th>{{$suratmasuk->statussurat}}</th>
                <th>{{$suratmasuk->no_surat}}</th>
                <th>{{$suratmasuk->perihal}}</th>
                <th>{{$suratmasuk->instansipengirim}}</th>
                <th>{{$suratmasuk->Keterangan}}</th>
              </tr>
            </tbody>
          </table>
      </form>
    </div>
</center>

<script>
   window.print();
</script>