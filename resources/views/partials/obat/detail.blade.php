@extends('layouts.master')
@section('title','Page Title')
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
                    Detail Obat # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <from role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table">
                                        <tr>
                                            <td><label>Id Apoteker</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->id_apoteker }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Nama Obat</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->nama_obat}}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Harga</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->harga }}</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="location.href='/edit-obat/{{ $data->id }}';">Edit
                                                </button>
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/obat';">Kembali
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </from>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

        </div>
    </div>

    <!-- /.row -->
@endsection