@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit List Surat Masuk</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listsuratmasuk/update/{{$suratmasuk->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statussuratmasuk">Status Surat Masuk</label>
                  <select class="form-control" id="statussuratmasuk" name="statussuratmasuk">
                    <option id="statussuratmasuk" name="statussuratmasuk" value="-----Pilih-----">-----Pilih-----</option>
                    <option id="statussuratmasuk" name="statussuratmasuk" value="Diterima">Diterima</option>
                    <option id="statussuratmasuk" name="statussuratmasuk" value="Dibalas">Dibalas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nosurat">No. Surat </label>
                  <input type="text" class="form-control" value="{{$suratmasuk->no_surat}}"id="perihal" name="no_surat" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal </label>
                  <input type="text" class="form-control" value="{{$suratmasuk->perihal}}"id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="instansipengirim">Instansi Pengirim</label>
                  <input type="text" class="form-control" value="{{$suratmasuk->instansipengirim}}"id="instansipengirim" name="instansipengirim" placeholder="Instansi Pengirim">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="Keterangan" placeholder="Keterangan">{{$suratmasuk->Keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="Edit">
                <a href="/listsuratmasuk" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
