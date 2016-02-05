@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Obat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Data Obat
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/obat" method="post">
                                <div class="form-group">
                                    <label>Id Apoteker</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="id_apoteker">
                                </div>
                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama_obat">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="harga">
                                </div>
                                <div class="form-group">

                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/obat/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/obat';">Kembali
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