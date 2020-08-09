@extends('master.layout')

@section('content')

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form List Faktur Pajak</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

              <!-- form start -->
            <form method="post" action="/listfakturpajak/save" enctype="multipart/form-data"> 
            {{ csrf_field() }}
              <div class="box-body">
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
                        @if($i->prioritas==1)
                          <option>{{strtoupper($i->npwp)}}</option>
                        @endif
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="bulanpajak">Bulan Pajak</label>
                  <select name="bulanpajak" id="bulanpajak" class="form-control">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
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
            <h4 class="header-title">Data Table List Faktur Pajak</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Faktur Pajak</th>
                        <th>Tanggal Faktur Pajak</th>
                        <th>No. Kwitansi</th>
                        <th>No. Invoice</th>
                        <th>Perihal</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Pajak</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;?>

                    @foreach($listfakturpajak as $lfp)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$lfp->nofakturpajak}}</td>
                        <td>{{$lfp->tanggalfakturpajak}}</td>
                        <td>{{$lfp->nokwitansi}}</td>
                        <td>{{$lfp->noinvoice}}</td>
                        <td>{{$lfp->perihal}}</td>
                        <td>{{$lfp->instansirekanan}}</td>
                        <td>{{$lfp->bulanpajak}}</td>
                        <td>{{$lfp->nominalhpp}}</td>
                        <td>{{$lfp->nominalppn}}</td>
                        <td>
                           <!--  <a href="/listfakturpajak/edit/{{ $lfp->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/listfakturpajak/view/{{ $lfp->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <a href="/listfakturpajak/delete/{{ $lfp->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->
                            <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$lfp->id}}">Edit</button>
                            <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$lfp->id}}">View</button>
                            <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$lfp->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No. Faktur Pajak</th>
                        <th>Tanggal Faktur Pajak</th>
                        <th>No. Kwitansi</th>
                        <th>No. Invoice</th>
                        <th>Perihal</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Pajak</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
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
@foreach($listfakturpajak as $lfp)
<div class="modal fade" id="Edit{{$lfp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listfakturpajak/update/{{$lfp->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="nofakturpajak">No. Faktur Pajak</label>
              <input type="text" class="form-control" value="{{$lfp->nofakturpajak}}" id="nofakturpajak" name="nofakturpajak" placeholder="No. Faktur Pajak">
            </div>

            <div class="form-group">
              <label for="tanggalfakturpajak">Tanggal Faktur Pajak</label>
              <input type="date" class="form-control" value="{{$lfp->tanggalfakturpajak}}" id="tanggalfakturpajak" name="tanggalfakturpajak" placeholder="Tanggal Faktur Pajak">
            </div>

            <div class="form-group">
              <label for="nokwitansi">No. Kwitansi</label>
              <input type="text" class="form-control" value="{{$lfp->nokwitansi}}" id="nokwitansi" name="nokwitansi" placeholder="No. Kwitansi">
            </div>

            <div class="form-group">
              <label for="noinvoice">No. invoice</label>
              <input type="text" class="form-control" value="{{$lfp->noinvoice}}" id="noinvoice" name="noinvoice" placeholder="No. Invoice">
            </div>

            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" value="{{$lfp->perihal}}" id="perihal" name="perihal" placeholder="Perihal">
            </div>

            <div class="form-group">
              <label for="instansirekanan">Instansi Rekanan</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$lfp->instansirekanan}}" id="instansirekanan" name="instansi" placeholder="Instansi Rekanan">
            </div>

            <div class="form-group">
              <label for="npwp">NPWP Instansi Rekanan</label>
              <!-- untuk  memanggil npwp instansi rekanan -->
              <input type="text" class="form-control" value="{{$i->npwp}}" id="npwp" name="npwp" placeholder="NPWP Instansi Rekanan">
            </div>

            <div class="form-group">
              <label for="bulanpajak">Bulan Pajak</label>
              <input type="text" class="form-control" value="{{$lfp->bulanpajak}}" id="bulanpajak" name="bulanpajak" placeholder="Bulan Pajak">
            </div>

            <div class="form-group">
              <label for="nominalhpp">Nominal HPP</label>
              <input type="number" class="form-control" value="{{$lfp->nominalhpp}}" id="nominalhpp" name="nominalhpp"placeholder="Nominal HPP">
            </div>

            <div class="form-group">
              <label for="nominalppn">Nominal PPN</label>
              <input type="number" class="form-control" value="{{$lfp->nominalppn}}" id="nominalppn" name="nominalppn" placeholder="Nominal PPN">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">{{$lfp->keterangan}}</textarea>
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
@foreach($listfakturpajak as $lfp)
<div class="modal fade" id="View{{$lfp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listfakturpajak/update/{{$lfp->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="nofakturpajak">No. Faktur Pajak</label>
              <input type="text" class="form-control" value="{{$lfp->nofakturpajak}}" id="nofakturpajak" name="nofakturpajak" placeholder="No. Faktur Pajak" readonly>
            </div>

            <div class="form-group">
              <label for="tanggalfakturpajak">Tanggal Faktur Pajak</label>
              <input type="date" class="form-control" value="{{$lfp->tanggalfakturpajak}}" id="tanggalfakturpajak" name="tanggalfakturpajak" placeholder="Tanggal Faktur Pajak" readonly>
            </div>

            <div class="form-group">
              <label for="nokwitansi">No. Kwitansi</label>
              <input type="text" class="form-control" value="{{$lfp->nokwitansi}}" id="nokwitansi" name="nokwitansi" placeholder="No. Kwitansi" readonly>
            </div>

            <div class="form-group">
              <label for="noinvoice">No. invoice</label>
              <input type="text" class="form-control" value="{{$lfp->noinvoice}}" id="noinvoice" name="noinvoice" placeholder="No. Invoice" readonly>
            </div>

            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" value="{{$lfp->perihal}}" id="perihal" name="perihal" placeholder="Perihal" readonly>
            </div>

            <div class="form-group">
              <label for="instansirekanan">Instansi Rekanan</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$lfp->instansirekanan}}" id="instansirekanan" name="instansi" placeholder="Instansi Rekanan" readonly>
            </div>

            <div class="form-group">
              <label for="npwp">NPWP Instansi Rekanan</label>
              <!-- untuk  memanggil npwp instansi rekanan -->
              <input type="text" class="form-control" value="{{$i->npwp}}" id="npwp" name="npwp" placeholder="NPWP Instansi Rekanan" readonly>
            </div>

            <div class="form-group">
              <label for="bulanpajak">Bulan Pajak</label>
              <input type="text" class="form-control" value="{{$lfp->bulanpajak}}" id="bulanpajak" name="bulanpajak" placeholder="Bulan Pajak" readonly>
            </div>

            <div class="form-group">
              <label for="nominalhpp">Nominal HPP</label>
              <input type="number" class="form-control" value="{{$lfp->nominalhpp}}" id="nominalhpp" name="nominalhpp"placeholder="Nominal HPP" readonly>
            </div>

            <div class="form-group">
              <label for="nominalppn">Nominal PPN</label>
              <input type="number" class="form-control" value="{{$lfp->nominalppn}}" id="nominalppn" name="nominalppn" placeholder="Nominal PPN" readonly>
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" readonly>{{$lfp->keterangan}}</textarea>
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
@foreach($listfakturpajak as $lfp)
<div class="modal" id="Delete{{$lfp->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/listfakturpajak/delete/{{$lfp->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data? {{$lfp->perihal}}</p>
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