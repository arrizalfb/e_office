@extends('master.layout')

@section('content')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Form Divisi</b></h3>
            </div>
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
                <a href="/divisi" button type="button" class="btn btn-default badge-pill" style="padding-right:80px,width:80px">Back</a>
              </div>
            </form>
          </div>

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
                      <td>{{$d->jenisdivisi}}</td>
                      <td>{{$d->inisialdevisi}}</td>
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
