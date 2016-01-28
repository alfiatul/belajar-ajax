@extends('layouts.master')
@section('title','Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Apoteker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Data Apoteker # {{ $data->id }}
                </div>
                <div class="panel-body">
                    {{--<form role="form">--}}
                    @if (count($data) > 0)
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="/update-apoteker/{{ $data->id  }}" method="post">
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <label>:</label>
                                        <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <label>:</label>
                                        <input type="text" name="alamat" class="form-control"
                                               value="{{ $data->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <label>:</label>
                                        <input type="text" name="Jk" class="form-control" value="{{ $data->Jk }}">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <label>:</label>
                                        <input type="text" name="notel" class="form-control" value="{{ $data->notel }}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline btn-info">Simpan
                                        </button>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="location.href='/apoteker';">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    {{--</form>--}}                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>    <!-- /.row -->
@endsection