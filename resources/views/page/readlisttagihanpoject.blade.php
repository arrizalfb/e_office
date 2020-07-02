@extends('master.layout')

@section('content')
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan Tagihan Project</b></h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form method="post" action="/listtagihanproject/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group, col-md-6">
                  <label for="statusdokument">Status Dokument Project</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->statusdokument}}" id="statusdokument" name="statusdokument" placeholder="Status Dokument Project">
                </div>
                <div class="form-group, col-md-6">
                  <label for="statustagihan">Status Tagihan Project</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->statustagihan}}" id="statustagihan" name="statustagihan" placeholder="Status Tagihan Project">
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Intansi Rekanan</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->instansirekanan}}" id="instansirekanan" name="instansirekanan" placeholder="Intansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="tanggaltagihan">Tanggal Tagihan</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->tanggaltagihan}}" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan">
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->nominalhpp}}" id="nominalhpp" name="nominalhpp" placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="nominalppn">Nominal PPN</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->ppn}}" id="nominalppn" name="nominalppn" placeholder="Nominal PPN">
                </div>
                <div class="form-group">
                  <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->tanggaljatuhtempo}}" id="tanggaljatuhtempo" name="tanggaljatuhtempo" placeholder="Tanggal Jatuh Tempo">
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap</label>
                  <input type="text" class="form-control" value="{{$listtagihanpoject->dokumentpelengkap}}" id="dokumentpelengkap" name="dokumentpelengkap" placeholder="Dokument Pelengkap">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$listtagihanpoject->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="/listtagihanproject" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection