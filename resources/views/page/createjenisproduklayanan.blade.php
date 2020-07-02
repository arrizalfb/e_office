@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Jenis Produk/Layanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/jenisproduklayanan/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nomor">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="nomor" name="no" placeholder="Nomor">
                </div>
                <div class="form-group">
                  <label for="jenisproduklayanan">Jenis Produk/Layanan</label>
                  <input type="text" class="form-control" id="jenisproduklayanan" name="jenisproduklayanan" placeholder="Jenis Produk Layanan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/jenisproduklayanan" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
