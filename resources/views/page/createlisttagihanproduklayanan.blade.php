@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form List Tagihan Produk/Layanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/listtagihanproduklayanan/save" enctype="multipart/form-data"> 
            {{ csrf_field() }}
              <div class="box-body">
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
                  <label for="tanggaltagihan">Tanggal Tagihan</label>
                  <input type="date" class="form-control" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan">
                </div>
                <div class="form-group">
                  <label for="hpp">Nominal HPP</label>
                  <input type="number" class="form-control" id="hpp" name="nominalhpp" placeholder="Nominal HPP">
                </div>
                <div class="form-group">
                  <label for="jatuhtempo">Tanggal Jatuh Tempo</label>
                  <input type="date" class="form-control" id="jatuhtempo" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo">
                </div>
                <div class="form-group">
                  <label for="dokumentpelengkap">Dokument Pelengkap</label>
                  <input type="file" class="form-control" accept=".jpg, .doc, .docx, " id="dokumentpelengkap" name="dokumenpelengkap" placeholder="Dokument Pelengkap">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/listtagihanproduklayanan" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>

 <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Tagihan Produk/Layanan</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
            <a href="/listtagihanproduklayanan/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;
                        $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember')
                    ?>

                    @foreach($listtagihanproduklayanan as $ltpl)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ltpl->instansirekanan}}</td>
                        <td>{{$bulan[date('m', strtotime($ltpl->tanggaltagihan))]}}</td>
                        <td>{{$ltpl->tanggaltagihan}}</td>
                        <td>{{$ltpl->nominalhpp}}</td>
                        <td>{{$ltpl->ppn}}</td>
                        <td>{{$ltpl->tanggaljatuhtempo}}</td>
                        <td><img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" height="100" width="100"></td>
                        <td>
                            <a href="/listtagihanproduklayanan/edit/{{ $ltpl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listtagihanproduklayanan/view/{{ $ltpl->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listtagihanproduklayanan/delete/{{ $ltpl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

            </table>
        </div>
@endsection
