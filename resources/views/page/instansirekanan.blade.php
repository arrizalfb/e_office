@extends('master.layout')

@section('content')
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
                    <th>Nama Contact</th>
                    <th>Contact</th>
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
                      <td>{{$i->nama_contact}}</td>
                      <td>{{$i->contact_person}}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Instansi Rekanan</th>
                      <th>Alamat</th>
                      <th>NPWP</th>
                      <th>Nama Contact</th>
                      <th>Contact</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection
