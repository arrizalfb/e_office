@extends('master.layout')

@section('content')
<div class="container">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2>Instansi Rekanan</h2>
                    <a href="/create/jenissurat" button type="button" class="btn btn-primary badge-pill" style="width:80px">Create</a>
                </div>
            </div>
            <div class=>
                <div class="card-body">
                    <h5 class="card-title"><h3>Berikut merupakan Tabel Instansi Rekanan</h3>
                    <table class="table table-dark table-hover table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Surat</th>
                            <th scope="col">Inisial Jenis Surat</th>
                            <th scope="col">Keterangan</th>
                            <th scope="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>elektronik</td>
                            <td>MZ</td>
                            <td>masalah hidup</td>
                            <td class = "text-right">
                                <button type="button" class="btn btn-primary badge-pill" style="width:80px">Edit</button>
                                <button type="button" class="btn btn-danger badge-pill" style="width:80px">Delete</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </div>
@endsection