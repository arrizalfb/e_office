@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Tagihan Project</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproject/save" enctype="multipart/form-data"> 
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="number">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="number" name="number" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                    <!-- untuk  memanggil instansi rekanan -->
                    <select name="instansi" class="form-control">
                      @foreach($instansi as $i)
                        <option>{{strtoupper($i->instansi_rekanan)}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="tanggaltagihan">Tanggal Tagihan</label>
                  <input type="date" class="form-control" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tangal Tagihan">
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP</label>
                  <input type="text" class="form-control" id="nominalhpp" name="nominalhpp"placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo</label>
                  <input type="date" class="form-control" id="tanggaljatuhtempo" name="tanggaljatuhtempo" placeholder="Tanggal Jatuh Tempo">
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap</label>
                  <input type="file" class="form-control" accept=".jpg, .pdf, .doc, .docx" id="dokumentpelengkap" name="dokumentpelengkap" placeholder="Dokument Pelengkap">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listtagihanproject" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
