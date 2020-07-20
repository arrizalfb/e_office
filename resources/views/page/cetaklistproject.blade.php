<center>
		<div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Laporan Surat Keluar</b></h3>
      </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form method="post" action="/laporan/listtagihanproject/cetaklist">
            {{ csrf_field() }}
              <div class="box-body">
              	<table id="example1" border="1" width="100%" class="table table-bordered table-striped">
              		<thead>
              			<tr>
                      <th><label for="statusdokument">Status Dokument Project</label></th>
                      <th><label for="statustagihan">Status Tagihan Project</label></th>
                      <th><label for="instansirekanan">Intansi Rekanan</label></th>
                      <th><label for="tanggaltagihan">Tanggal Tagihan</label></th>
                      <th><label for="nominalhpp">Nominal HPP</label></th>
                      <th><label for="nominalppn">Nominal PPN</label></th>
                      <th><label for="tanggaljatuhtempo">Tanggal Jatuh Tempo</label></th>
                      <th><label for="dokumentpelengkap">Dokument Pelengkap</label></th>
                      <th><label for="keterangan">Keterangan</label></th>
                    </tr>
                  <tbody>
                    <tr>
                      <th>{{$listtagihanpoject->statusdokument}}</th>
                      <th>{{$listtagihanpoject->statustagihan}}</th>
                      <th>{{$listtagihanpoject->instansirekanan}}</th>
                      <th>{{$listtagihanpoject->tanggaltagihan}}</th>
                      <th>{{$listtagihanpoject->nominalhpp}}</th>
                      <th>{{$listtagihanpoject->ppn}}</th>
                      <th>{{$listtagihanpoject->tanggaljatuhtempo}}</th>
                      <th>{{$listtagihanpoject->dokumentpelengkap}}</th>
                      <th>{{$listtagihanpoject->keterangan}}</th>
                    </tr>
                  </tbody>
                </thead>
              </table>
            </div>
          </form>
    </div>
</center>

<script>
  window.print();
</script>


