@extends('master.layout')

@section('content')
<center>
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan List Tagihan Produk/Layanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/laporan/listtagihanproduklayanan/cetaklist">
            {{ csrf_field() }}
              <div class="box-body">
              	<table id="example1" border="1" width="100%" class="table table-bordered table-striped">
              		<thead>
              			<tr>
              				<th><label for="statusdokument">Status Dokument</label></th>
              				<th><label for="statustagihan">Status Tagihan</label></th>
              				<th><label for="instansirekanan">Intansi Rekanan</label></th>
              				<th><label for="bulantagihan">Bulan Tagihan</label></th>
              				<th><label for="tanggaltagihan">Tanggal Tagihan</label></th>
              				<th><label for="nominalhpp">Nominal HPP</label></th>
              				<th><label for="nominalppn">Nominal PPN</label></th>
              				<th><label for="tanggaljatuhtempo">Tanggal Jatuh Tempo</label></th>
              				<th><label for="dokumentpelengkap">Dokument Pelengkap</label></th>
              				<th><label for="keterangan">Keterangan</label></th>
              			</tr>
              		</thead>
              		<tbody>
              			<tr>
              				<th>{{$listtagihanproduklayanan->statusdokument}}</th>
              				<th>{{$listtagihanproduklayanan->statustagihan}}</th>
              				<th>{{$listtagihanproduklayanan->instansirekanan}}</th>
              				<th>{{$listtagihanproduklayanan->bulantagihan}}</th>
              				<th>{{$listtagihanproduklayanan->tanggaltagihan}}</th>
              				<th>{{$listtagihanproduklayanan->nominalhpp}}</th>
              				<th>{{$listtagihanproduklayanan->ppn}}</th>
              				<th>{{$listtagihanproduklayanan->tanggaljatuhtempo}}</th>
              				<th>{{$listtagihanproduklayanan->dokumenpelengkap}}</th>
              				<th>{{$listtagihanproduklayanan->keterangan}}</th>
              			</tr>
              		</tbody>
              	</table>
              </div>
          </form>
      </div>
  </center>
<!-- Cetak -->
<script>
   window.print();
</script>