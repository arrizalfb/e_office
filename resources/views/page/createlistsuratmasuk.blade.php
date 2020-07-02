@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Surat Masuk</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listsuratmasuk/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="number">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="number" name="number" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="no_surat">No Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="instansipengirim">Instansi Pengirim</label>
                  <input type="text" class="form-control" id="instansipengirim" name="instansipengirim"placeholder="Perusahaan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="Keterangan"placeholder="Perusahaan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listsuratmasuk" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
