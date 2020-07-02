@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit Jenis Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/jenissuratkeluar/update/{{$suratkeluar->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->jenissurat}}" id="jenissurat" name="jenissurat" placeholder="Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="noromawijenissurat">No. Romawi Jenis Surat</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->noromawijenissurat}}" id="noromawijenissurat" name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="inisialjenissurat">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->inisialjenissurat}}"id="inisialjenissurat" name="inisialjenissurat" placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$suratkeluar->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="Edit">
                <a href="/jenissuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
