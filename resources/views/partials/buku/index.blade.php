@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Buku</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Buku
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if (count($bukus) > 0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($bukus as $buku)
                                    <tr class="">
                                        <td>{{ $buku->judul }}</td>
                                        <td>{{ $buku->pengarang }}</td>
                                        <td>{{ $buku->penerbit }}</td>
                                        <td>{{ $buku->kategori }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/buku/{{ $buku->id }}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="location.href='/edit-buku/{{ $buku->id }}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-danger"
                                                    onclick="location.href='/hapus-buku/{{ $buku->id }}';">Delete
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