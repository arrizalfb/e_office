@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit List Faktur Pajak</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listfakturpajak/update/{{$listfaktur->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="statusfakturpajak">Status Faktur Pajak</label>
                  <select class="form-control" id="statusfakturpajak" name="statusfakturpajak">
                    <option id="status" name="statusfakturpajak" value="--Pilih--">--Pilih--</option>
                    <option id="status" name="statusfakturpajak" value="Belum Dibayar">Belum Dibayar</option>
                    <option id="status" name="statusfakturpajak" value="Sudah Dibayar">Sudah Dibayar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nofakturpajak">No. Faktur Pajak </label>
                  <input type="text" class="form-control" value="{{$listfaktur->nofakturpajak}}"id="nofakturpajak" name="nofakturpajak" placeholder="No. Faktur Pajak">
                </div>
                <div class="form-group">
                  <label for="tanggalfakturpajak">Tanggal Faktur Pajak </label>
                  <input type="date" class="form-control" value="{{$listfaktur->tanggalfakturpajak}}"id="tanggalfakturpajak" name="tanggalfakturpajak" placeholder="Tanggal Faktur Pajak">
                </div>
                <div class="form-group">
                  <label for="nokwitansi">No. Kwitansi </label>
                  <input type="text" class="form-control" value="{{$listfaktur->nokwitansi}}"id="nokwitansi" name="nokwitansi" placeholder="No. Kwitansi">
                </div>
                <div class="form-group">
                  <label for="noinvoice">No. Invoice </label>
                  <input type="text" class="form-control" value="{{$listfaktur->noinvoice}}"id="noinvoice" name="noinvoice" placeholder="No. Invoice">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal </label>
                  <input type="text" class="form-control" value="{{$listfaktur->perihal}}"id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan </label>
                  <input type="text" class="form-control" value="{{$listfaktur->instansirekanan}}"id="instansirekanan" name="instansi" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="npwpinstansirekanan">NPWP Instansi Rekanan </label>
                  <input type="text" class="form-control" value="{{$listfaktur->npwp}}"id="npwpinstansirekanan" name="npwpinstansirekanan" placeholder="NPWP Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="bulanpajak">Bulan Pajak </label>
                  <input type="text" class="form-control" value="{{$listfaktur->bulanpajak}}"id="bulanpajak" name="bulanpajak" placeholder="Bulan Pajak">
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP </label>
                  <input type="text" class="form-control" value="{{$listfaktur->nominalhpp}}"id="nominalhpp" name="nominalhpp" placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="nominalppn">Nominal PPN </label>
                  <input type="text" class="form-control" value="{{$listfaktur->nominalppn}}"id="nominalppn" name="nominalppn" placeholder="Nominal PPN">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" value="" id="keterangan" name="keterangan" placeholder="Keterangan">{{$listfaktur->keterangan}}</textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="Edit">
                <a href="/listfakturpajak" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
