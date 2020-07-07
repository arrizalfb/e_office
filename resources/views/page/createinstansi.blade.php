@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Intansi Rekanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/instansi/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                  <input type="text" class="form-control" id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="npwp">NPWP</label>
                  <input type="number" class="form-control" id="npwp" name="npwp"placeholder="NPWP">
                </div>
                <div class="form-group">
                  <label for="contactperson">Contact Person</label>
                  <textarea rows="7" class="form-control" id="contactperson" name="contactperson" placeholder="Contact Person"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
            </form>
          </div>
@endsection
