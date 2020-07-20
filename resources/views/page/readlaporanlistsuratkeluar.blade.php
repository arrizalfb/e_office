@extends('master.layout')

@section('content')
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Laporan Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/laporan/listsuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statussurat">Status Surat Keluar</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->statussurat}}" id="statussurat" name="statussurat" placeholder="Status Surat Keluar" readonly>
                </div>
                <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->no_surat}}" id="no_surat" name="no_surat" placeholder="Nomor Surat" readonly >
                </div>
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->jenissurat}}" id="jenissurat" name="jenissurat" placeholder="Jenis Surat" readonly >
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->perihal}}"id="perihal" name="perihal" placeholder="Perihal" readonly >
                </div>
                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->tujuan}}" id="tujuan" name="tujuan" placeholder="Tujuan" readonly >
                </div>
                <div class="form-group">
                  <label for="penanggungjawab">Penanggung Jawab</label>
                  <input type="text" class="form-control" value="{{$suratkeluar->penanggungjawab}}" id="penanggungjawab" name="penanggungjawab"placeholder="Penanggung Jawab" readonly >
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="/laporan/listsuratkeluar" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>

@endsection