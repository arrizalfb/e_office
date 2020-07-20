		<center>
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/laporan/listsuratkeluar/cetaksatu">
            {{ csrf_field() }}
              <div class="box-body">
              	<table id="example1" border="1" width="100%" class="table table-bordered table-striped">
              		<thead>
              			<tr>
              				<th><label for="statussurat">Status Surat Keluar</label></th>
              				<th><label for="no_surat">No. Surat</label></th>
              				<th><label for="jenissurat">Jenis Surat</label></th>
              				<th><label for="perihal">Perihal</label></th>
              				<th><label for="tujuan">Tujuan</label></th>
              				<th><label for="penanggungjawab">Penanggung Jawab</label></th>
              			</tr>
              		</thead>
              		<tbody>
              			<tr>
              				<th>{{$suratkeluar->statussurat}}</th>
              				<th>{{$suratkeluar->no_surat}}</th>
              				<th>{{$suratkeluar->jenissurat}}</th>
              				<th>{{$suratkeluar->perihal}}</th>
              				<th>{{$suratkeluar->tujuan}}</th>
              				<th>{{$suratkeluar->penanggungjawab}}</th>
              			</tr>
              		</tbody>
	            </table>
              <!-- /.box-body -->
            </form>
          </div>
        </center>

<script>
   window.print();
</script>
