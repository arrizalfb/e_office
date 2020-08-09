@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"><b>Edit List Surat Keluar</b></h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="post" action="/listsuratkeluar/update/{{$listkeluar->id}}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="statussuratkeluar">Status Surat</label>
                    <select class="form-control" id="statussuratkeluar" name="statussuratkeluar">
                      <option id="statussuratkeluar" name="statussuratkeluar" value="--Pilih--">--Pilih--</option>
                      <option id="statussuratkeluar" name="statussuratkeluar" value="Belum Dikirim">Belum Dikirim</option>
                      <option id="statussuratkeluar" name="statussuratkeluar" value="Dikirim Via Email">Dikirim Via Email</option>
                      <option id="statussuratkeluar" name="statussuratkeluar" value="Dikirim Via Social Chat">Dikirim Via Social Chat</option> 
                      <option id="statussuratkeluar" name="statussuratkeluar" value="Dikirim Via Ekspedisi">Dikirim Via Ekspedisi</option>
                      <option id="statussuratkeluar" name="statussuratkeluar" value="Sudah diterima">Sudah diterima</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nosurat">No. Surat</label>
                    <input type="text" class="form-control" value="{{$listkeluar->no_surat}}" id="no_surat" name="no_surat" placeholder="Jenis Surat">
                  </div>
                  <div class="form-group">
                    <label for="jenissurat">Jenis Surat</label>
                    <input type="text" class="form-control" value="{{$listkeluar->jenissurat}}" id="jenissurat" name="jenissurat" placeholder="Jenis Surat">
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal </label>
                    <input type="text" class="form-control" value="{{$listkeluar->perihal}}"id="perihal" name="perihal" placeholder="Inisial Jenis Surat">
                  </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan </label>
                    <input type="text" class="form-control" value="{{$listkeluar->tujuan}}"id="tujuan" name="tujuan" placeholder="Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="penanggungjawab">Penanggung Jawab </label>
                    <input type="text" class="form-control" value="{{$listkeluar->penanggungjawab}}"id="penanggungjawab" name="penanggungjawab" placeholder="Penanggung Jawab">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$listkeluar->keterangan}}</textarea>
                  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="Edit">
                  <a href="/listsuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
