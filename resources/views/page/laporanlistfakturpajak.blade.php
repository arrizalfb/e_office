@extends('master.layout')

@section('content')
	<div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Table List Faktur Pajak</b></h3>
        </div>
        <div class="card-body" style="padding:10px">
            <a href="/laporan/listfakturpajak/cetaklist" target="_blank" button type="button" class="btn btn-primary badge-pill" style="padding-right:80px,width:80px">Cetak</a>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;?>

                    @foreach($listfakturpajak as $lfp)
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
                        <td>
                            <a href="/laporan/listfakturpajak/view/{{ $lfp->id }}" button type="button" class="btn btn-warning badge-pill" style="padding-right:80px,width:80px">View</a>
                            <!-- <a href="/listfakturpajak/delete/{{ $lfp->id }}" button type="button" class="btn btn-danger badge-pill" style="padding-right:80px,width:80px">Cetak</a> -->
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
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
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
    