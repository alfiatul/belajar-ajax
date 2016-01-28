@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Apoteker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Data Apoteker
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/apoteker" method="post">
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
                                    {{--onclick="location.href='/apoteker/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/apoteker';">Kembali
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