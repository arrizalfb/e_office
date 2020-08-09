@extends('master.layout')

@section('content')
<!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <!-- Primary table start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Laporan List Surat Keluar</h4>
            <div class="data-tables datatable-primary">
              <table id="dataTable2" class="text-center">
                <thead>
                  <tr>
                  <th>No</th>
                        <th>No. Faktur Pajak</th>
                        <th>Tanggal Faktur Pajak</th>
                        <th>No. Kwitansi</th>
                        <th>No. Invoice</th>
                        <th>Perihal</th>
                        <th>Instansi Rekanan</th>
                        <th>NPWP Instansi Rekanan</th>
                        <th>Bulan Pajak</th>
                        <th>Nominal HPP</th>
                        <th>Nominal PPN</th>
                  </tr>
                </thead>

                <tbody>
                <?php $no = 1;?>

                @foreach($laporanlistfakturpajak as $lfp)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lfp->nofakturpajak}}</td>
                    <td>{{$lfp->tanggalfakturpajak}}</td>
                    <td>{{$lfp->nokwitansi}}</td>
                    <td>{{$lfp->noinvoice}}</td>
                    <td>{{$lfp->perihal}}</td>
                    <td>{{$lfp->instansirekanan}}</td>
                    <td>{{$lfp->npwp}}</td>
                    <td>{{$lfp->bulanpajak}}</td>
                    <td>{{$lfp->nominalhpp}}</td>
                    <td>{{$lfp->nominalppn}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection