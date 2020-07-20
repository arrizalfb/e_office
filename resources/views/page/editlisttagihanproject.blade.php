@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit List Tagihan Project</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproject/update/{{$listproject->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group, col-md-6">
                  <label for="statusdokument">Status Dokument Project</label>
                  <select class="form-control" id="statusdokument" name="statusdokument">
                    <option id="statusdokument" name="statusdokument" value="-----Pilih-----">-----Pilih-----</option>
                    <option id="statusdokument" name="statusdokument" value="Belum Dikirim">Belum Dikirim</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Email">Dikirim Via Email</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim via social chat">Dikirim Via Social Chat</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Ekspedisi">Dikirim Via Ekspedisi</option>
                    <option id="statusdokument" name="statusdokument" value="Sudah Diterima">Sudah Diterima</option>
                  </select>
                </div>
                <div class="form-group, col-md-6">
                  <label for="statustagihan">Status Tagihan Project</label>
                  <select class="form-control" id="statustagihan" name="statustagihan">
                    <option id="statustagihan" name="statustagihan" value="-----Pilih-----">-----Pilih-----</option>
                    <option id="statustagihan" name="statustagihan" value="Diterima CP">Diterima CP</option>
                    <option id="statustagihan" name="statustagihan" value="Diproses Keuangan">Diproses Keuangan</option>
                    <option id="statustagihan" name="statustagihan" value="Diproses Direksi">Diproses Direksi</option>
                    <option id="statustagihan" name="statustagihan" value="Sudah Dibayar">Sudah Dibayar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan </label>
                  <input type="text" class="form-control" value="{{$listproject->instansirekanan}}"id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="tanggaltagihan">Tanggal Tagihan </label>
                  <input type="date" class="form-control" value="{{$listproject->tanggaltagihan}}"id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan">
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP </label>
                  <input type="text" class="form-control" value="{{$listproject->nominalhpp}}"id="nominalhpp" name="nominalhpp" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo </label>
                  <input type="date" class="form-control" value="{{$listproject->tanggaljatuhtempo}}"id="tanggaljatuhtempo" name="tanggaljatuhtempo" placeholder="Tanggal Jatuh Tempo">
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap </label>
                  <input type="text" class="form-control" value="{{$listproject->dokumentpelengkap}}"id="dokumentpelengkap" name="dokumentpelengkap" placeholder="Dokument Pelengkap">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$listproject->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="Edit">
                <a href="/listtagihanproject" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
