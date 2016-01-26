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
                    Edit Buku # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <form role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->judul }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->pengarang }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->penerbit }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->kategori }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->status }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->tahun_terbit }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Bahasa</label>
                                            <label>:</label>
                                            <input class="form-control" value="{{ $data->bahasa }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="">Simpan
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/buku';">Kembali
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </form>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection