@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form List Tagihan Produk/Layanan</h4>
              <div class="data-tables datatable-primary">
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
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Data Table List Tagihan Produk/Layanan</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
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
                            <!-- <a href="/listtagihanproduklayanan/edit/{{ $ltpl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a> -->
                            <!-- <a href="/listtagihanproduklayanan/view/{{ $ltpl->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a> -->
                            <!-- <a href="/listtagihanproduklayanan/delete/{{ $ltpl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->
                            <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$ltpl->id}}">Edit</button>
                            <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$ltpl->id}}">View</button>
                            <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$ltpl->id}}">Delete</button>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Data -->
@foreach($listtagihanproduklayanan as $ltpl)
<!-- Modal -->
<div class="modal fade" id="Edit{{$ltpl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listtagihanproduklayanan/update/{{$ltpl->id}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="instansirekanan">Instansi Rekanan</label>
              <!-- untuk  memanggil instansi rekanan -->
              <select name="instansi" class="form-control" value="{{$ltpl->instansirekanan}}">
                @foreach($instansi as $i)
                  <option>{{strtoupper($i->instansi_rekanan)}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="tanggaltagihan">Tanggal Tagihan</label>
              <input type="date" class="form-control" value="{{$ltpl->tanggaltagihan}}" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan">
            </div>

            <div class="form-group">
              <label for="hpp">Nominal HPP</label>
              <input type="number" class="form-control" value="{{$ltpl->nominalhpp}}" id="hpp" name="nominalhpp" placeholder="Nominal HPP">
            </div>

            <div class="form-group">
              <label for="jatuhtempo">Tanggal Jatuh Tempo</label>
              <input type="date" class="form-control"  value="{{$ltpl->tanggaljatuhtempo}}" id="jatuhtempo" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo">
            </div>

            <div class="form-group">
              <label for="dokumentpelengkap">Dokument Pelengkap</label>
              <input type="file" class="form-control" accept=".jpg, .doc, .docx," height='100' width='100' id="" name="file_baru" placeholder="Dokument Pelengkap">
              <input type="hidden" name="file_lama" value="{{$ltpl->dokumenpelengkap}}">
              <img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" type="file" class="form-group" accept=".jpg, .doc, .docx," height="100" width="100" id="dokumentpelengkap" placeholder="Dokument Pelengkap">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">{{$ltpl->keterangan}}</textarea>
            </div>
              <!-- /.box-body -->

            <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>

          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endforeach

<!-- View Data -->
@foreach($listtagihanproduklayanan as $ltpl)
<!-- Modal -->
<div class="modal fade" id="View{{$ltpl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listtagihanproduklayanan/view/{{$ltpl->id}}">
          {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="instansirekanan">Instansi Rekanan</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$ltpl->instansirekanan}}" id="instansirekanan" name="instansi" placeholder="Instansi Rekanan" readonly>
            </div>

            <div class="form-group">
              <label for="tanggaltagihan">Tanggal Tagihan</label>
              <input type="date" class="form-control" value="{{$ltpl->tanggaltagihan}}" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan" readonly>
            </div>

            <div class="form-group">
              <label for="hpp">Nominal HPP</label>
              <input type="number" class="form-control" value="{{$ltpl->nominalhpp}}" id="hpp" name="nominalhpp" placeholder="Nominal HPP" readonly>
            </div>

            <div class="form-group">
              <label for="jatuhtempo">Tanggal Jatuh Tempo</label>
              <input type="date" class="form-control" value="{{$ltpl->tanggaljatuhtempo}}" id="jatuhtempo" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo" readonly>
            </div>

            <div class="form-group">
              <label for="dokumentpelengkap">Dokument Pelengkap</label>
              <img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" type="file" height="100" width="100">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" readonly>{{$ltpl->keterangan}}</textarea>
            </div>
              <!-- /.box-body -->

          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endforeach

<!-- Delete Data -->
@foreach($listtagihanproduklayanan as $ltpl)
<div class="modal" id="Delete{{$ltpl->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/listtagihanproduklayanan/delete/{{$ltpl->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data? {{$ltpl->instansirekanan}}</p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endforeach

@endsection