@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Anggota</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button onclick="location.href='/create-anggota';"><i class="glyphicon glyphicon-plus-sign"></i> Tambah
                        Anggota
                    </button>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if (count($anggotas) > 0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($anggotas as $anggota)
                                    <tr class="">
                                        <td>{{ $anggota->nama }}</td>
                                        <td>{{ $anggota->alamat }}</td>
                                        <td>{{ $anggota->kota }}</td>
                                        <td>{{ $anggota->no_telp }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/anggota/{{ $anggota->id }}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="location.href='/edit-anggota/{{ $anggota->id }}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-danger"
                                                    onclick="location.href='/hapus-anggota/{{ $anggota->id }}';">Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection