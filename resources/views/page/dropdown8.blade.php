@extends('master.layout')

@section('content')

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form Jenis Produk/Layanan</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/jenisproduklayanan/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenisproduklayanan">Jenis Produk/Layanan</label>
                  <input type="text" class="form-control" id="jenisproduklayanan" name="jenisproduklayanan" placeholder="Jenis Produk Layanan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                </div>
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
            <h4 class="header-title">Data Table Jenis Produk/Layanan</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk/Layanan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                   <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;?>
                @foreach($jenisproduklayanan as $pl)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pl->jenisproduklayanan}}</td>
                        <td>{{$pl->keterangan}}</td>
                        <td>
                            <!-- <a href="/jenisproduklayanan/edit/{{ $pl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a> -->
                            <!-- <a href="/jenisproduklayanan/delete/{{ $pl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->
                            <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$pl->id}}">Edit</button>
                            <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$pl->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Jenis Produk Layanan</th>
                        <th>Keterangan</th>
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


<!-- Edit Data -->
@foreach($jenisproduklayanan as $pl)
<!-- Modal -->
<div class="modal fade" id="Edit{{$pl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/jenisproduklayanan/update/{{$pl->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="jenisproduklayanan">Jenis Produk/Layanan</label>
              <input type="text" class="form-control" value="{{$pl->jenisproduklayanan}}" id="jenisproduklayanan" name="jenisproduklayanan" placeholder="Jenis Produk Layanan">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">{{$pl->keterangan}}</textarea>
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


<!-- Delete Data -->
@foreach($jenisproduklayanan as $pl)
<!-- Delete -->
<div class="modal" id="Delete{{$pl->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/jenisproduklayanan/delete/{{$pl->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data? {{$pl->jenisproduklayanan}}</p>
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