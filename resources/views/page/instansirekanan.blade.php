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
                  <form method="post" action="/instansi/save">
                  {{ csrf_field() }}
                    <div class="box-body">

                      <div class="form-group">
                        <label for="instansirekanan">Nama Perusahaan/Instansi</label>
                        <input type="text" class="form-control" id="instansirekanan" name="instansirekanan" placeholder="Nama Perusahaan/Instansi">
                      </div>

                      <div class="form-group">
                        <label for="skala">Skala Prioritas</label>
                          <!-- untuk  memanggil npwp instansi rekanan -->
                          <select name="skala" class="form-control">
                              <option value="1">Penting</option>
                              <option value="0">Tidak</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="alamat">Alamat Perusahaan/Instansi</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Perusahaan/Instansi">
                      </div>

                      <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="number" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
                      </div>

                      <div class="form-group">
                        <label for="namecontact">Nama Kontak Person</label>
                        <input type="text" class="form-control" id="contactperson" name="namecontact" placeholder="Nama Kontak Person">
                      </div>

                      <div class="form-group">
                        <label for="contactperson">No. Telepon Perusahaan/Instansi</label>
                        <input type="text" class="form-control" id="contactperson" name="contact" placeholder="Kontak Perusahaan/Instansi">
                      </div>

                      <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit"> 
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Primary table start -->
      <div class="main-content-inner">
        <div class="row">
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Data Table Instansi Rekanan</h4>
                <div class="data-tables datatable-primary">
                  <table id="dataTable2" class="text-center">
                    <thead class="text-capitalize">
                      <tr>
                        <th>No</th>
                        <th>Nama Perusahaan/Instansi</th>
                        <th>Alamat</th>
                        <th>NPWP</th>
                        <th>Nama Kontak Person</th>
                        <th>No. Telepon Perusahaan/Instansi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                        @foreach($instansi as $i)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$i->instansi_rekanan}}</td>
                          <td>{{$i->alamat}}</td>
                          <td>{{$i->npwp}}</td>
                          <td>{{$i->namecontact}}</td>
                          <td>{{$i->contact_person}}</td>
<!--                      <td>
                            @if($i->prioritas == 0)
                              Tidak
                            @else
                              Penting
                            @endif
                          </td> -->
                          <td>
                            <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$i->id}}">Edit</button>
                            <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$i->id}}">Delete</button>

                            <!-- <a href="/instansi/edit/{{ $i->id }}" button type="button" class="btn btn-info badge-pill, fa fa-edit" style="padding-right:80px,width:80px">Edit</a>
                            <a href="/instansi/delete/{{ $i->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a> -->
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Alamat</th>
                        <th>NPWP</th>
                        <th>Nama Kontak Person</th>
                        <th>No. Telepon Perusahaan/Instansi</th>
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
      <!-- Primary table end -->


<!-- Edit Data -->
@foreach($instansi as $i)
<div class="modal fade" id="Edit{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/instansi/update/{{$i->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="instansirekanan">Nama Perusahaan/Instansi</label>
              <input type="text" class="form-control" value="{{$i->instansi_rekanan}}" id="instansirekanan" name="instansirekanan" placeholder="Nama Perusahaan/Instansi">
            </div>

            <div class="form-group">
              <label for="skala">Skala Prioritas</label>
                <!-- untuk  memanggil npwp instansi rekanan -->
                <select name="skala" class="form-control">
                  <option value="1">Penting</option>
                  <option value="0">Tidak</option>
                </select>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat Perusahaan/Instansi</label>
              <input type="text" class="form-control" value="{{$i->alamat}}" id="alamat" name="alamat" placeholder="Alamat Perusahaan/Instansi">
            </div>
            
            <div class="form-group">
              <label for="npwp">NPWP</label>
              <input type="number" class="form-control" value="{{$i->npwp}}" id="npwp" name="npwp"placeholder="NPWP">
            </div>

            <div class="form-group">
              <label for="namecontact">Nama Kontak Person</label>
              <input type="text" class="form-control" value="{{$i->namecontact}}" id="contactperson" name="namecontact" placeholder="Nama Kontak Person">
            </div>
            
            <div class="form-group">
              <label for="contactperson">No. Telepon Perusahaan/Instansi</label>
              <input type="text" class="form-control" value="{{$i->contact_person}}" id="contactperson" name="contact" placeholder="Kontak Perusahaan/Instansi">
            </div>

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
@foreach($instansi as $i)
<div class="modal" id="Delete{{ $i->id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/instansi/delete/{{$i->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data {{$i->instansi_rekanan}}?</p>
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