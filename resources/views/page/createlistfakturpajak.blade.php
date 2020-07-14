@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Faktur Pajak</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listfakturpajak/save" enctype="multipart/form-data"> 
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="number">No</label>
                  <input type="text" class="form-control" value="{{$max}}" id="number" name="number" placeholder="No">
                </div>
                <div class="form-group">
                  <label for="nofakturpajak">No. Faktur Pajak</label>
                  <input type="text" class="form-control" id="nofakturpajak" name="nofakturpajak" placeholder="No. Faktur Pajak">
                </div>
                <div class="form-group">
                  <label for="tanggalfakturpajak">Tanggal Faktur Pajak</label>
                  <input type="date" class="form-control" id="tanggalfakturpajak" name="tanggalfakturpajak" placeholder="Tanggal Faktur Pajak">
                </div>
                <div class="form-group">
                  <label for="nokwitansi">No. Kwitansi</label>
                  <input type="text" class="form-control" id="nokwitansi" name="nokwitansi" placeholder="No. Kwitansi">
                </div>
                <div class="form-group">
                  <label for="noinvoice">No. invoice</label>
                  <input type="text" class="form-control" id="noinvoice" name="noinvoice" placeholder="No. Invoice">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                    <!-- untuk  memanggil instansi rekanan -->
                    <select name="instansi" class="form-control">
                      @foreach($instansi as $i)
                        <option>{{strtoupper($i->instansi_rekanan)}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="npwp">NPWP Instansi Rekanan</label>
                    <!-- untuk  memanggil npwp instansi rekanan -->
                    <select name="npwp" class="form-control">
                      @foreach($instansi as $i)
                        <option>{{strtoupper($i->npwp)}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="bulanpajak">Bulan Pajak</label>
                  <select class="form-control" name="bulanpajak" id="bulanpajak">
                    <option value="Januari-01">Januari-01</option>
                    <option value="Februari-02">Februari-02</option>
                    <option value="Maret-03">Maret-03</option>
                    <option value="April-04">April-04</option>
                    <option value="Mei-05">Mei-05</option>
                    <option value="Juni-06">Juni-06</option>
                    <option value="Juli-07">Juli-07</option>
                    <option value="Agustus-08">Agustus-08</option>
                    <option value="September-09">September-09</option>
                    <option value="Oktober-10">Oktober-10</option>
                    <option value="Novenmber-11">Novenmber-11</option>
                    <option value="Desember-12">Desember-12</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nominalhpp">Nominal HPP</label>
                  <input type="number" class="form-control" id="nominalhpp" name="nominalhpp"placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="nominalppn">Nominal PPN</label>
                  <input type="number" class="form-control" id="nominalppn" name="nominalppn" placeholder="Nominal PPN">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listfakturpajak" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>
@endsection
