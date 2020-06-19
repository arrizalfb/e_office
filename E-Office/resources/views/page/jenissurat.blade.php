@extends('master.layout')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Surat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" id="jenissurat" placeholder="Enter Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="inisialjenissurat">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" id="inisialjenissurat" placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="number" class="form-control" id="keterangan" placeholder="Keterangan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          @endsection
