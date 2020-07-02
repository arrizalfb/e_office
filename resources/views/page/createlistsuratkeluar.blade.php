@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listsuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="number">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="number" name="number" placeholder="Nomor">
                </div>
                <div class="form-group">
                  <label for="no_surat">No. Surat</label>
                  <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <select name="jenissurat" class="form-control">
                      @foreach($jenissurat as $j)
                        <option>{{strtoupper($j->jenissurat)}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <select name="instansi" class="form-control">
                      @foreach($instansi as $i)
                        <option>{{strtoupper($i->instansi_rekanan)}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="perusahaan">Perusahaan</label>
                  <input type="text" class="form-control" id="perusahaan" name="perusahaan"placeholder="Perusahaan">
                </div>
                <div class="form-group">
                  <label for="penanggungjawab">Penanggung Jawab</label>
                  <input type="text" class="form-control" id="penanggungjawab" name="penanggungjawab"placeholder="Penanggung Jawab">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listsuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
