@extends('master.layout')

@section('content')

<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Form Jenis Surat Keluar</h4>
              <div class="data-tables datatable-primary">
              <!-- /.box-header -->

              <form method="post" action="/jenissuratkeluar/save">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="jenissurat">Jenis Surat</label>
                  <input type="text" class="form-control" id="jenissurat" name="suratjenis" placeholder="Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="noromawijenissurat">No. Romawi Jenis Surat</label>
                  <?php

                    if (date('m')=='01') {
                      $rom = "I";
                    }elseif (date('m')=='02') {
                      $rom = "II";
                    }elseif (date('m')=='03') {
                      $rom = "III";
                    }elseif (date('m')=='04') {
                      $rom = "IV";
                    }elseif (date('m')=='05') {
                      $rom = "V";
                    }elseif (date('m')=='06') {
                      $rom = "VI";
                    }elseif (date('m')=='07') {
                      $rom = "VII";
                    }elseif (date('m')=='08') {
                      $rom = "VIII";
                    }elseif (date('m')=='09') {
                      $rom = "IX";
                    }elseif (date('m')=='10') {
                      $rom = "X";
                    }elseif (date('m')=='11') {
                      $rom = "XI";
                    }elseif (date('m')=='12') {
                      $rom = "XII";
                    }

                    if (strlen($max)==1) {
                      $max = '000'.$max;
                    }elseif (strlen($max)==2) {
                      $max = '00'.$max;
                    }elseif (strlen($max)==3) {
                      $max = '0'.$max;
                    }elseif (strlen($max)==4) {
                      $max = $max;
                    }
                   ?>

                   <!-- Nomor Urut / Inisial Divisi / Inisial Jenis Surat / Bulan Dikeluarkan Surat / Tahun Dikeluarkan Suraf -->
                  <div class="form-inline">
                    <div class="col-md-12">
                      <input type="text" class="form-control" value="{{$max}}"id="idnosurat" name="nosurat" placeholder="No. Romawi Jenis Surat">
                      <select type="text" class="form-control" id="noromawijenissurat" name="divnosurat" placeholder="No. Romawi Jenis Surat">
                        @foreach($divisi as $dvi)
                          <option>{{$dvi->inisialdevisi}}</option>
                        @endforeach
                      </select>
                      <input type="text" class="form-control" value="{{'.A/KKP/'.date('M').'/'.date('Y')}}"  name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inisial">Inisial Jenis Surat</label>
                  <input type="text" class="form-control" id="inisial" name="inisialjenissurat"placeholder="Inisial Jenis Surat">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea rows="7" class="form-control" id="keterangan" name="ket" placeholder="Keterangan"></textarea> 
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
              <h4 class="header-title">Data Tabel Jenis Surat Keluar</h4>
              <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Surat</th>
                      <th>No. Romawi Jenis Surat</th>
                      <th>Inisial Jenis Surat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                                        
                  <tbody>
                    <?php $no = 1;?>
                    @foreach($jenissuratkeluar as $j)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$j->jenissurat}}</td>
                      <td>{{$j->noromawijenissurat}}</td>
                      <td>{{$j->inisialjenissurat}}</td>
                      <td>
                        <!-- <a href="/jenissuratkeluar/edit/{{ $j->id }}" button type="button" class="btn btn-info badge-pill, fa fa-edit" style="padding-right:80px,width:80px">Edit</a> -->
                        <!-- <a href="/jenissuratkeluar/delete/{{ $j->id }}" button type="button" class="btn btn-danger fa fa-trash" style="padding-right:80px,width:80px">Delete</a> -->

                        <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$j->id}}">Edit</button>
                        <button type="button" class="btn btn-danger badge-pill fa fa-trash" data-toggle="modal" data-target="#Delete{{$j->id}}">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                                        
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Jenis Surat</th>
                      <th>No. Romawi Jenis Surat</th>
                      <th>Inisial Jenis Surat</th>
                      <th>Action</th>
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
@foreach($jenissuratkeluar as $j)
<!-- Modal -->
<div class="modal fade" id="Edit{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/jenissuratkeluar/update/{{$j->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label for="jenissurat">Jenis Surat</label>
              <input type="text" class="form-control" value="{{$j->jenissurat}}" id="jenissurat" name="suratjenis" placeholder="Jenis Surat">
            </div>

            <div class="form-group">
              <label for="noromawijenissurat">No. Romawi Jenis Surat</label>
              <!-- Nomor Urut / Inisial Divisi . Nomor Urut Jenis Surat / Inisial Jenis Surat / Bulan Dikeluarkan Surat / Tahun Dikeluarkan Suraf -->
              <div class="form-inline">
                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{$max}}"id="idnosurat" name="nosurat" placeholder="No. Romawi Jenis Surat">
                    <select type="text" class="form-control" id="noromawijenissurat" name="divnosurat" placeholder="No. Romawi Jenis Surat">
                      @foreach($divisi as $dvi)
                      <option>{{$dvi->inisialdevisi}}</option>
                      @endforeach
                    </select>
                  <input type="text" class="form-control" value="{{'/KKP/'.date('M').'/'.date('Y')}}"  name="noromawijenissurat" placeholder="No. Romawi Jenis Surat">
                    </div>
              </div>
            </div>

            <div class="form-group">
              <label for="inisial">Inisial Jenis Surat</label>
              <input type="text" class="form-control" value="{{$j->inisialjenissurat}}" id="inisial" name="inisialjenissurat"placeholder="Inisial Jenis Surat">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="ket" placeholder="Keterangan">{{$j->keterangan}}</textarea> 
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
</div>
@endforeach


<!-- Delete Data -->
@foreach($jenissuratkeluar as $j)
<div class="modal" id="Delete{{ $j->id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="get" action="/jenissuratkeluar/delete/{{$j->id}}">

        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Are You Sure Delete This Data? {{$j->inisialjenissurat}}</p>
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
