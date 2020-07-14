@extends('master.layout')

@section('content')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Table Divisi</b></h3>
            </div>
            <div class="card-body" style="padding:10px">
              <a href="/divisi/create" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Create</a>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Divisi</th>
                    <th>Inisial Divisi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
                  @foreach($divisi as $d)
                    <tr>
                      <td>{{$d->id}}</td>
                      <td>{{$d->jenis_divisi}}</td>
                      <td>{{$d->inisial_divisi}}</td>
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
            <!-- /.box-body -->
          </div>
@endsection
