@extends('master.layout')

@section('content')
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan Produk/Layanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproduklayanan/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statusdokument">Status Dokument</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->statusdokument}}" id="statusdokument" name="statusdokument" placeholder="Status Dokument" disabled>
                </div>
                <div class="form-group">
                  <label for="statustagihan">Status Tagihan</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->statustagihan}}" id="statustagihan" name="statustagihan" placeholder="Status Tagihan" disabled>
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Intansi Rekanan</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->instansirekanan}}" id="instansirekanan" name="instansirekanan" placeholder="Intansi Rekanan" disabled>
                </div>
                <div class="form-group">
                  <label for="bulantagihan">Bulan Tagihan</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->bulantagihan}}"id="bulantagihan" name="bulantagihan" placeholder="Bulan Tagihan" disabled>
                </div>
                <div class="form-group">
                  <label for="tanggaltagihan">Tanggal Tagihan</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->tanggaltagihan}}" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan" disabled>
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->nominalhpp}}" id="nominalhpp" name="nominalhpp" placeholder="Nominal HPP" disabled>
                </div>
                <div class="form-group">
                  <label for="nominalppn">Nominal PPN</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->ppn}}" id="nominalppn" name="nominalppn" placeholder="Nominal PPN" disabled>
                </div>
                <div class="form-group">
                  <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->tanggaljatuhtempo}}" id="tanggaljatuhtempo" name="tanggaljatuhtempo" placeholder="Tanggal Jatuh Tempo" disabled>
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap</label>
                  <input type="text" class="form-control" value="{{$listtagihanproduklayanan->dokumenpelengkap}}" id="dokumentpelengkap" name="dokumentpelengkap" placeholder="Dokument Pelengkap" disabled>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan" disabled>{{$listtagihanproduklayanan->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="/listtagihanproduklayanan" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection