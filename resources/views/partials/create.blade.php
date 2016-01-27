@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pelanggan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Data Pelanggan
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/pelanggan" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label>No Antrian</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="noantrian">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="Jk">
                                </div>
                                <div class="form-group">
                                    <label>No Telpon</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="notel">
                                </div>
                                <div class="form-group">

                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/pelanggan/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/pelanggan';">Kembali
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