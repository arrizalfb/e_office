@extends('master.layout')

@section('content')
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan Surat Masuk</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listsuratmasuk/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statussurat">Status Surat Masuk</label>
                  <input type="text" class="form-control" value="{{$suratmasuk->statussurat}}" id="statussurat" name="statussurat" placeholder="Status Surat Masuk" disabled>
                </div>
                <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" value="{{$suratmasuk->no_surat}}" id="no_surat" name="no_surat" placeholder="Nomor Surat" disabled>
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" value="{{$suratmasuk->perihal}}"id="perihal" name="perihal" placeholder="Perihal" disabled>
                </div>
                <div class="form-group">
                  <label for="instansipengirim">Instansi Pengirim</label>
                  <input type="text" class="form-control" value="{{$suratmasuk->instansipengirim}}" id="tujuan" name="tujuan" placeholder="Tujuan" disabled>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan" disabled>{{$suratmasuk->Keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="/listsuratmasuk" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection