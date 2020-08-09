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
                        <label for="prioritas">Skala Prioritas</label>
                          <!-- untuk  memanggil npwp instansi rekanan -->
                          <select name="prioritas" class="form-control">
                              <option name="prioritas" value="Penting">Penting</option>
                              <option name="prioritas" value="Penting">Tidak</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat Perusahaan/Instansi</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Perusahaan/Instansi">
                      </div>
                      <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="number" class="form-control" id="npwp" name="npwp"placeholder="NPWP">
                      </div>
                      <div class="form-group">
                        <label for="namecontact">Nama Kontak Perusahaan/Instansi</label>
                        <input type="text" class="form-control" id="namecontact" name="namecontact" placeholder="Nama Kontak Perusahaan/Instansi">
                      </div>
                      <div class="form-group">
                        <label for="contactperson">Kontak Perusahaan/Instansi</label>
                        <input type="number" class="form-control" id="contactperson" name="contact" placeholder="Kontak Perusahaan/Instansi">
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
                        <th>Instansi Rekanan</th>
                        <th>Alamat</th>
                        <th>NPWP</th>
                        <th>Nama Contact Person</th>
                        <th>Contact Person</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                        @foreach($instansi as $i)
                        <tr>
                          <td>{{$i->id}}</td>
                          <td>{{$i->instansi_rekanan}}</td>
                          <td>{{$i->alamat}}</td>
                          <td>{{$i->npwp}}</td>
                          <td>{{$i->namecontact}}
                          <td>{{$i->contact_person}}</td>
<!--                      <td>
                            @if($i->prioritas == 0)
                              Tidak
                            @else
                              Penting
                            @endif
                          </td> -->
                          <td>
                            <a href="/instansi/delete/{{ $i->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a>
                          </td>
                          <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Alamat</th>
                        <th>NPWP</th>
                        <th>Nama Contact Person</th>
                        <th>Contact Person</th>
                        <th>Action</th>
                        <th></th>
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
    

@endsection
