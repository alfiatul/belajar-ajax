@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()">
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
    <div id="Index">
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Data Apoteker</h1>
                    </div>
                    <button type="button" class="btn btn-outline btn-info"
                            onclick="Create()">Add
                    </button>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            {{--                        @if (count($apoteker) > 0)--}}
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="tampildata">

                                {{--@foreach ($apoteker as $data)--}}
                                {{--<tr class="">--}}
                                {{--<td>{{ $data->name }}</td>--}}
                                {{--<td>{{ $data->alamat }}</td>--}}
                                {{--<td>{{ $data->Jk }}</td>--}}
                                {{--<td>{{ $data->notel }}</td>--}}
                                {{--<td>--}}
                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                {{--onclick="location.href='/apoteker/{{ $data->id }}';">Detail--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-info"--}}
                                {{--onclick="Edit({{ $data->id }})">Edit--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                {{--id="Delete" onclick="Hapus({{ $data->id }})">Delete--}}
                                {{--</button>--}}

                                {{--</td>--}}
                                {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                            </table>

                            {{--@endif--}}
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
    <div id="Create">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Data Apoteker
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
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
                                                onclick="Index()">Kembali
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
    </div>
    <div id="Edit">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Data Apoteker #
                    </div>
                    <div class="panel-body">
                        {{--<form role="form">--}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="Form-Edit">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <label>:</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <label>:</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <label>:</label>
                                            <input type="text" name="Jk" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telpon</label>
                                            <label>:</label>
                                            <input type="text" name="notel" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline btn-info">Simpan
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="Index()">Kembali
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        {{--</form>--}}
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();
            $("#Form-Create").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        Nama = $form.find("input[name='name']").val(),
                        Alamat = $form.find("input[name='alamat']").val(),
                        Jenis_Kelamin = $form.find("input[name='Jk']").val(),
                        No_Telpon = $form.find("input[name='notel']").val();
                //   $("From-Create").reset();

                var posting = $.post('/apoteker', {
                    name: Nama,
                    alamat: Alamat,
                    Jk: Jenis_Kelamin,
                    notel: No_Telpon
                });

                //Put the results in a div
                posting.done(function (data) {
                    //console.log(data);
                    window.alert(data.result.message);
                    getAjax();
                    Index();
                });
            });
        });


        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
        }
        function Create() {
            $('#Create').show();
            $('#Edit').hide();
            $('#Index').hide();
            $("input[name='name']").val("");
            $("input[name='alamat']").val("");
            $("input[name='Jk']").val("");
            $("input[name='notel']").val("");

        }

        function getAjax() {
            $("#tampildata").children().remove();
            $.getJSON("/data-apoteker", function (data) {
                $.each(data.slice(0, 9), function (i, data) {
                    $("#tampildata").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.Jk + "</td><td>" + data.notel + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit(" + data.id + ")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                })
            });
        }
        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            $.ajax({
                        method: "Get",
                        url: '/apoteker/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.judul);
                        //var $form = $(this),
                        Nama = $("input[name='name']").val(data.name);
                        Alamat = $("input[name='alamat']").val(data.alamat);
                        Jenis_kelamin = $("input[name='Jk']").val(data.Jk);
                        No_Telpon = $("input[name='notel']").val(data.notel);

                        $('#Edit').show();
                    });

            $("Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        Nama = $form.find("input[name='name']").val(),
                        Alamat = $form.find("input[name='alamat']").val(),
                        Jenis_Kelamin = $form.find("input[name='Jk']").val(),
                        No_Telpon = $form.find("input[name='notel']").val();

                $.ajax({
                            method: "PUT",
                            url: '/apoteker/' + id,
                            data: {
                                Nama: name,
                                Alamat: alamat,
                                Jenis_Kelamin: Jk,
                                NO_telpon: notel
                            }
                        })

                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                            Index();
                        });

            });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yankin Ingin Menghapus ?");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/apoteker/' + id,
                            data: {}
                        })

                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                        });

            }
        }

    </script>
    </body>
    <!-- /.row -->
@endsection