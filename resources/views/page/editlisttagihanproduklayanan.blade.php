@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit List Tagihan Produk/Layanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproduklayanan/update/{{$listtagihan->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group, col-md-6">
                <label for="statusdokument">Status Dokument Project</label>
                  <select class="form-control" id="statusdokument" name="statusdokument">
                    <option id="statusdokument" name="statusdokument" value="-----Pilih-----">-----Pilih-----</option>
                    <option id="statusdokument" name="statusdokument" value="Belum Dikirim">Belum Dikirim</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Email">Dikirim Via Email</option>
                    <optgroup label="Dikirim Via Social Chat">
                    <option id="statusdokument" name="statusdokument" value="Dikirim via social chat | Line">Line</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim via social chat | WhatsApp">WhatsApp</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim via social chat | Telegram">Telegram</option>
                    </optgroup>
                    <optgroup label="Dikirim Via Ekspedisi">
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Ekspedisi | POS Indonesia">POS Indonesia</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Ekspedisi | JNE">JNE</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Ekspedisi | SiCepat">SiCepat</option>
                    <option id="statusdokument" name="statusdokument" value="Dikirim Via Ekspedisi | J&T">J&T</option>
                    </optgroup>
                    <option id="statusdokument" name="statusdokument" value="Sudah Diterima">Sudah Diterima</option>
                  </select>
                </div>
                <div class="form-group, col-md-6">
                  <label for="statustagihan">Status Tagihan</label>
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
                  <input type="text" class="form-control" value="{{$listtagihan->instansirekanan}}"id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="tanggaltagihan">Tanggal Tagihan </label>
                  <input type="date" class="form-control" value="{{$listtagihan->tanggaltagihan}}"id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan">
                </div>
                <div class="form-group">
                  <label for="hpp">Nominal HPP </label>
                  <input type="text" class="form-control" value="{{$listtagihan->hpp}}"id="hpp" name="hpp" placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="ppn">Nominal PPN </label>
                  <input type="text" class="form-control" value="{{$listtagihan->ppn}}"id="ppn" name="ppn" placeholder="Nominal PPN">
                </div>
                <div class="form-group">
                  <label for="jatuhtempo">Tanggal Jatuh Tempo </label>
                  <input type="date" class="form-control" value="{{$listtagihan->jatuhtempo}}"id="jatuhtempo" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo">
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap </label>
                  <input type="text" class="form-control" value="{{$listtagihan->dokumenpelengkap}}"id="dokumenpelengkap" name="dokumenpelengkap" placeholder="Dokument Pelengkap">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$listtagihan->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="Edit">
                <a href="/listtagihanproduklayanan" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
