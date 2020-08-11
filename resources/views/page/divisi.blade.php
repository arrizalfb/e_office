@extends('master.layout')

@section('content')
  <!-- page title area end -->
    <div class="main-content-inner">
      <div class="row">
        <!-- Primary table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Form Divisi</h4>
                  <div class="data-tables datatable-primary">
                  <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="/divisi/save">
                    {{ csrf_field() }}
                      <div class="box-body">
                        <div class="form-group">
                          <label for="jenisdivisi">Jenis Divisi</label>
                          <input type="text" class="form-control" id="jenisdivisi" name="jenisdivisi" placeholder="Jenis Divisi">
                        </div>
                        <div class="form-group">
                          <label for="inisialdevisi">Inisial Divisi</label>
                          <input type="text" class="form-control" id="inisialdevisi" name="inisialdevisi" placeholder="Inisial Divisi">
                        </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </div>

                    </form>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end Primary table start -->
      </div>
    </div>

    <!-- page title area end -->
    <div class="main-content-inner">
      <div class="row">
        <!-- Primary table start -->
        <div class="col-12 mt-4">
          <div class="card">

            <div class="card-body">
              <h4 class="header-title">Data Tabel Divisi</h4>
              <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                  <thead class="text-capitalize">
                    <tr>
                      <th>No</th>
                      <th>Jenis Divisi</th>
                      <th>Inisial Divisi</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no = 1;?>
                       @foreach($divisi as $d)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$d->jenisdivisi}}</td>
                        <td>{{$d->inisialdevisi}}</td>
                        <td>
                          <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$d->id}}">Edit</button>
                          <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$d->id}}" padding="15">Delete</button>
                          <!-- <a href="/divisi/edit/{{ $d->id }}" button type="button" class="btn btn-info badge-pill, fa fa-edit" style="padding-right:80px,width:80px">Edit</a>
                          <a href="/divisi/delete/{{ $d->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a> -->
                        </td>
                    </tr>
                        @endforeach
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Jenis Divisi</th>
                      <th>Inisial Divisi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div>
        </div>
        <!-- Primary table end -->
      </div>
    </div>


<!-- Edit Data -->
@foreach($divisi as $d)
<div class="modal fade" id="Edit{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/divisi/update/{{$d->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="jenisdivisi">Jenis Divisi</label>
              <input type="text" class="form-control" value="{{$d->jenisdivisi}}" id="jenisdivisi" name="jenisdivisi" placeholder="Jenis Divisi">
            </div>

            <div class="form-group">
              <label for="inisialdevisi">Inisial Divisi</label>
              <input type="text" class="form-control" value="{{$d->inisialdevisi}}" id="inisialdevisi" name="inisialdevisi" placeholder="Inisial Divisi">
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
@foreach($divisi as $d)
<div class="modal" id="Delete{{$d->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/divisi/delete/{{$d->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data {{$d->inisialdevisi}}?</p>
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
