@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Status Dokument Data Table List Tagihan Produk/Layanan</h4>
            <div class="data-tables dataTables_wrapper datatable-primary">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- untuk  nomor urut otomatis -->
                    <?php $no = 1;
                        $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember')
                    ?>

                    @foreach($listtagihanproduklayanan as $ltpl)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ltpl->instansirekanan}}</td>
                        <td>{{$bulan[date('m', strtotime($ltpl->tanggaltagihan))]}}</td>
                        <td>{{$ltpl->tanggaltagihan}}</td>
                        <td>{{$ltpl->nominalhpp}}</td>
                        <td>{{$ltpl->ppn}}</td>
                        <td>{{$ltpl->tanggaljatuhtempo}}</td>
                        <td><img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" height="100" width="100"></td>
                        <td>
                            <!-- <a href="/listtagihanproduklayanan/edit/{{ $ltpl->id }}" button type="button" class="btn btn-info badge-pill" style="padding-right:80px,width:80px">Edit</a> -->
                            <!-- <a href="/listtagihanproduklayanan/view/{{ $ltpl->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a> -->
                            <!-- <a href="/listtagihanproduklayanan/delete/{{ $ltpl->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Delete</a> -->
                            <button type="button" class="btn btn-info badge-pill fa fa-edit" data-toggle="modal" data-target="#Edit{{$ltpl->id}}">Edit</button>
                            <button type="button" class="btn btn-warning badge-pill fa fa-eye" data-toggle="modal" data-target="#View{{$ltpl->id}}">View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Instansi Rekanan</th>
                        <th>Bulan Tagihan</th>
                        <th>Tanggal Tagihan</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Dokument Pelengkap</th>
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
</div>

<!-- Edit Data -->
@foreach($listtagihanproduklayanan as $ltpl)
<!-- Modal -->
<div class="modal fade" id="Edit{{$ltpl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <script>
          function tampilkan(){
            var nama_kota=document.getElementById("form3").detail.value;
            if (nama_kota=="Email"){
                  document.getElementById("tampil").innerHTML=
                  "<input type='text' id='email' class='form-control' name='ketstat' placeholder='Masukkan Email'>";
            }else if (nama_kota=="Social"){
                  document.getElementById("tampil").innerHTML=
                  "<input type='text' id='social' class='form-control' name='ketstat' placeholder='Masukkan Social Media yang diinginkan'>";
            }else{
                  document.getElementById("tampil").innerHTML="";
            }
          }
      </script>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="form3" method="post" action="/listtagihanproduklayanan/statusdokument/{{$ltpl->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">

            <div class="form-group">
              <label>Pilih Kategori: </label>
                <select id="detail" name="status" class="form-control" onchange="tampilkan()">
                  <option>Belum Dikirim</option>
                  <option value="Email">Dikirim via email</option>
                  <option value="Social">Dikirim via Social Chat</option>
                  <option>Dikirim via Ekspedisi</option>
                  <option>Sudah Diterima</option>
                </select>
            </div>

            <div class="form-group">
                <p id="tampil"></p>
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

<!-- View Data -->
@foreach($listtagihanproduklayanan as $ltpl)
<!-- Modal -->
<div class="modal fade" id="View{{$ltpl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="/listtagihanproduklayanan/view/{{$ltpl->id}}">
          {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="status">Status Dokument</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$ltpl->statusdokument}}" id="status" name="instansi" placeholder="Status Dokument" readonly>
            </div>

            <div class="form-group">
              <label for="keteranganstatus">Keterangan Status</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$ltpl->keteranganstatus}}" id="keteranganstatus" name="instansi" placeholder="Keterangan Status" readonly>
            </div>

            <div class="form-group">
              <label for="instansirekanan">Instansi Rekanan</label>
              <!-- untuk  memanggil instansi rekanan -->
              <input type="text" class="form-control" value="{{$ltpl->instansirekanan}}" id="instansirekanan" name="instansi" placeholder="Instansi Rekanan" readonly>
            </div>

            <div class="form-group">
              <label for="tanggaltagihan">Tanggal Tagihan</label>
              <input type="date" class="form-control" value="{{$ltpl->tanggaltagihan}}" id="tanggaltagihan" name="tanggaltagihan" placeholder="Tanggal Tagihan" readonly>
            </div>

            <div class="form-group">
              <label for="hpp">Nominal HPP</label>
              <input type="number" class="form-control" value="{{$ltpl->nominalhpp}}" id="hpp" name="nominalhpp" placeholder="Nominal HPP" readonly>
            </div>

            <div class="form-group">
              <label for="jatuhtempo">Tanggal Jatuh Tempo</label>
              <input type="date" class="form-control" value="{{$ltpl->tanggaljatuhtempo}}" id="jatuhtempo" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo" readonly>
            </div>

            <div class="form-group">
              <label for="dokumentpelengkap">Dokument Pelengkap</label>
              <img src="{{asset('/storage/'.$ltpl->dokumenpelengkap)}}" type="file" height="100" width="100">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea rows="7" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" readonly>{{$ltpl->keterangan}}</textarea>
            </div>
              <!-- /.box-body -->

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

@endsection