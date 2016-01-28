@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Data Pelanggan</h1>
                </div>
                <button type="button" class="btn btn-outline btn-info"
                        onclick="location.href='/create-pelanggan';">Add
                </button>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if (count($pelanggan) > 0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Antrian</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pelanggan as $data)
                                    <tr class="">
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->noantrian }}</td>
                                        <td>{{ $data->Jk }}</td>
                                        <td>{{ $data->notel }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/pelanggan/{{$data->id}}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="location.href='/edit-pelanggan/{{$data->id}}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-danger"
                                                    onclick="location.href='/hapus-pelanggan/{{$data->id}}';">Delete
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
@endsection