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
                    Tambah Buku
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/buku" method="post">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="pengarang">
                                </div>
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="penerbit">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kategori">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tahun_terbit">
                                </div>
                                <div class="form-group">
                                    <label>Bahasa</label>
                                    <label>:</label>
                                    <input type="text" name="bahasa" class="form-control">
                                </div>
                                <div class="form-group">

                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/buku';">Kembali
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection