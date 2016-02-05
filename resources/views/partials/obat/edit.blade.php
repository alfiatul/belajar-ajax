@extends('layouts.master')
@section('title','Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Obat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Data Obat # {{ $data->id }}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if (count($data) > 0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="/update-obat/{{ $data->id  }}" method="post">
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label>Id Apoteker</label>
                                        <label>:</label>
                                        <input type="text" name="id_apoteker" class="form-control"
                                               value="{{ $data->id_apoteker }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <label>:</label>
                                        <input type="text" name="nama_obat" class="form-control"
                                               value="{{ $data->nama_obat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <label>:</label>
                                        <input type="text" name="harga" class="form-control" value="{{ $data->harga }}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline btn-info">Simpan
                                        </button>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="location.href='/obat';">Kembali
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
    </div>    <!-- /.row -->
@endsection