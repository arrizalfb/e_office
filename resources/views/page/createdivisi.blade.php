@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Intansi Rekanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/divisi/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenis_divisi">Jenis Divisi</label>
                  <input type="text" class="form-control" id="jenis_divisi" name="jenis_divisi" placeholder="Jenis Divisi">
                </div>
                <div class="form-group">
                  <label for="inisial_divisi">Inisial Divisi</label>
                  <input type="text" class="form-control" id="inisial_divisi" name="inisial_divisi" placeholder="Inisial Divisi">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
            </form>
          </div>
@endsection