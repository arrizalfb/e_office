@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Intansi Rekanan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/instansi/save">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="instansirekanan">Instansi Rekanan</label>
                  <input type="text" class="form-control" id="instansirekanan" name="instansirekanan" placeholder="Instansi Rekanan">
                </div>
                <div class="form-group">
                  <label for="npwp">Skala Prioritas</label>
                    <!-- untuk  memanggil npwp instansi rekanan -->
                    <select name="skala" class="form-control">
                        <option value="0">Tidak</option>
                        <option value="1">Penting</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="npwp">NPWP</label>
                  <input type="number" class="form-control" id="npwp" name="npwp"placeholder="NPWP">
                </div>
                <div class="form-group">
                  <label for="namecontact">Nama Contact Person</label>
                  <input type="text" class="form-control" id="namecontact" name="namecontact" placeholder="Nama Contact Person">
                </div>
                <div class="form-group">
                  <label for="contactperson">Contact Person</label>
                  <input type="number" class="form-control" id="contactperson" name="contact" placeholder="Contact Person">
                  <small>Jika Contact Lebih dari Satu Pisahkan dengan koma ( , )</small>
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/instansi" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>


<div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Table Instansi Rekanan</b></h3>
            </div>
            <div class="card-body" style="padding:10px">
              <a href="/instansi/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Instansi Rekanan</th>
                    <th>Alamat</th>
                    <th>NPWP</th>
                    <th>Nama Contact Person</th>
                    <th>Contact Person</th>
                    <th>Skala Prioritas</th>
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
                      <td>
                        @if($i->prioritas == 0)
                          Tidak
                        @else
                          Penting
                        @endif
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
                      <th>Nama Contact Person</th>
                      <th>Contact Person</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection
