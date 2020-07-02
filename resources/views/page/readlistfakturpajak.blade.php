@extends('master.layout')

@section('content')
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>List Faktur Pajak</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproject/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statusfakturpajak">Status Faktur Pajak</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->statusfakturpajak}}" id="statusfakturpajak" name="statusfakturpajak" placeholder="Status Faktur Pajak" disabled>
                </div>
                <div class="form-group">
                  <label for="nofakturpajak">No. Faktur Pajak</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->nofakturpajak}}" id="nofakturpajak" name="nofakturpajak" placeholder="No. Faktur Pajak" disabled>
                </div>
                <div class="form-group">
                  <label for="tanggalfakturpajak">Tanggal Faktur Pajak</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->tanggalfakturpajak}}" id="tanggalfakturpajak" name="tanggalfakturpajak" placeholder="Tanggal Faktur Pajak" disabled>
                </div>
                <div class="form-group">
                  <label for="nokwitansi">No. Kwitansi</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->nokwitansi}}" id="nokwitansi" name="nokwitansi" placeholder="No. Kwitansi" disabled>
                </div>
                <div class="form-group">
                  <label for="noinvoice">No. Invoice</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->noinvoice}}" id="noinvoice" name="noinvoice" placeholder="No. Invoice" disabled>
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->perihal}}" id="perihal" name="perihal" placeholder="Perihal" disabled>
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->instansirekanan}}" id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan" disabled>
                </div>
                <div class="form-group">
                  <label for="npwp">NPWP Instansi Rekanan</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->npwp}}" id="npwp" name="npwp" placeholder="NPWP Instansi Rekanan" disabled>
                </div>
                <div class="form-group">
                  <label for="bulanpajak">Bulan Pajak</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->bulanpajak}}" id="bulanpajak" name="bulanpajak" placeholder="Bulan Pajak" disabled>
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->nominalhpp}}" id="nominalhpp" name="nominalhpp" placeholder="Nominal HPP" disabled>
                </div>
                <div class="form-group">
                  <label for="nominalppn">Nominal PPN</label>
                  <input type="text" class="form-control" value="{{$listfakturpajak->nominalppn}}" id="nominalppn" name="nominalppn" placeholder="Nominal PPN" disabled>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan" disabled>{{$listfakturpajak->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="/listfakturpajak" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection