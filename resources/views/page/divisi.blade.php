@extends('master.layout')

@section('content')
  <!-- page title area end -->
    <div class="main-content-inner">
      <div class="row">
        <!-- Primary table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Form Instansi Rekanan</h4>
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
                                              <td>{{$d->id}}</td>
                                              <td>{{$d->jenisdivisi}}</td>
                                              <td>{{$d->inisialdevisi}}</td>
                                              <td>
                                                <a href="/divisi/edit/{{ $d->id }}" button type="button" class="btn btn-info badge-pill, fa fa-edit" style="padding-right:80px,width:80px">Edit</a>
                                                <a href="/divisi/delete/{{ $d->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a>
                                              </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->

                </div>
            </div>

@endsection
