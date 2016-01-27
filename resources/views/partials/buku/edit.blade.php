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
                    {{--<form role="form">--}}
                    @if (count($data) > 0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="/buku/{{ $data->id }}" method="post">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->judul }}"
                                               name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->pengarang }}"
                                               name="pengarang">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->penerbit }}"
                                               name="penerbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->kategori }}"
                                               name="kategori">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->status }}"
                                               name="status">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" value="{{ $data->tahun_terbit }}"
                                               name="tahun_terbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa</label>
                                        <label>:</label>
                                        <input type="text" name="bahasa" class="form-control"
                                               value="{{ $data->bahasa }}">
                                    </div>
                                    <div class="form-group">
                                        {{--{{ csrf_field() }}--}}
                                        {{ method_field('PUT') }}

                                        <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                        {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="location.href='/buku';">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    {{--</form>--}}

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection