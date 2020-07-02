@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Jenis Surat Keluar</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/jenissuratkeluar/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nomor">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="nomor" name="no" placeholder="Nomor">
                </div>
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" id="jenissurat" name="suratjenis" placeholder="Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="noromawijenissurat">No. Romawi Jenis Surat</label>
                  <?php

                    if (date('m')=='01') {
                      $rom = "I";
                    }elseif (date('m')=='02') {
                      $rom = "II";
                    }elseif (date('m')=='03') {
                      $rom = "III";
                    }elseif (date('m')=='04') {
                      $rom = "IV";
                    }elseif (date('m')=='05') {
                      $rom = "V";
                    }elseif (date('m')=='06') {
                      $rom = "VI";
                    }elseif (date('m')=='07') {
                      $rom = "VII";
                    }elseif (date('m')=='08') {
                      $rom = "VIII";
                    }elseif (date('m')=='09') {
                      $rom = "IX";
                    }elseif (date('m')=='10') {
                      $rom = "X";
                    }elseif (date('m')=='11') {
                      $rom = "XI";
                    }elseif (date('m')=='12') {
                      $rom = "XII";
                    }

                    if (strlen($max)==1) {
                      $max = '000'.$max;
                    }elseif (strlen($max)==2) {
                      $max = '00'.$max;
                    }elseif (strlen($max)==3) {
                      $max = '0'.$max;
                    }elseif (strlen($max)==4) {
                      $max = $max;
                    }
                   ?>
                  <input type="text" class="form-control" value="{{$max.'/BTI/'.$rom.'/'.date('Y')}}"id="noromawijenissurat" name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="inisial">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" id="inisial" name="inisialjenissurat"placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="ket" placeholder="Keterangan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/jenissuratkeluar" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
