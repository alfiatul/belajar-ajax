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
                    <h1>Data Apoteker</h1>
                </div>
                <button type="button" class="btn btn-outline btn-info"
                        onclick="location.href='/create-apoteker';">Add
                </button>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if (count($apoteker) > 0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($apoteker as $data)
                                    <tr class="">
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->Jk }}</td>
                                        <td>{{ $data->notel }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="location.href='/apoteker/{{$data->id}}';">Detail
                                            </button>
                                            <button type="button" class="btn btn-outline btn-info"
                                                    onclick="location.href='/edit-apoteker/{{$data->id}}';">Edit
                                            </button>
                                            <button type="button" class="btn btn-outline btn-danger"
                                                    onclick="location.href='/hapus-apoteker/{{$data->id}}';">Delete
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