@extends('layouts.master')
@section('title','Page Title')
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
                    Detail Apoteker # {{ $data->id }}
                </div>
                <div class="panel-body">
                    <from role="form">
                        @if (count($data) > 0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table">
                                        <tr>
                                            <td><label>Nama</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->name }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Alamat</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->alamat }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Jenis Kelamin</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->Jk }}</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>No Telpon</label></td>
                                            <td><label>:</label></td>
                                            <td><label>{{ $data->notel }}</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="location.href='/edit-apoteker/{{ $data->id }}';">Edit
                                                </button>
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/apoteker';">Kembali
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