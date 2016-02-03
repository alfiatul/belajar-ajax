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
                        <button type="button" class="btn btn-outline btn-info"
                                onclick="Create()">Add
                        </button>
                    </div>
                    <center>
                        <div id="loader2">
                            <img src=" {!! asset('images/download1.gif') !!}">
                        </div>
                    </center>
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
                                <tbody id="data-example">

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
                                    <input type="hidden" name="id">
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
                                        <input type="submit" class="btn btn-outline btn-info" value="simpan">
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


    {{--Modal--}}

    {{--Detail Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <fond face="Bernard MT">Detail Apoteker</fond>
                    </h4>
                </div>
                <div class="modal-body">
                    {{--<p>Some Text in the modal.</p>.--}}
                    <div id="loader-wrapper">
                        <div id="loader"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="modal-body">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();
            $("#Form-Create").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        Jk = $form.find("input[name='Jk']").val(),
                        notel = $form.find("input[name='notel']").val();
                //   $("From-Create").reset();

                var posting = $.post('/apoteker', {
                    name: name,
                    alamat: alamat,
                    Jk: Jk,
                    notel: notel
                });

                //Put the results in a div
                posting.done(function (data) {
                    //console.log(data);
                    window.alert(data.result.message);
                    getAjax();
                    Index();
                });
            });

            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        Jk = $form.find("input[name='Jk']").val(),
                        notel = $form.find("input[name='notel']").val();

                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/apoteker/' + id,
                    data: {
                        name: name,
                        alamat: alamat,
                        Jk: Jk,
                        notel: notel
                    },
                    beforeSend: function () {
                        if (currentRequest != null) {
                            currentRequest.abort();
                        }
                    },
                    success: function (data) {
                        window.alert(data.result.message);
                        getAjax();
                        Index();
                    },
                    error: function (data) {
                        window.alert(data.result.message);
                        Index();
                    }
                });
            });

        })

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
                    $("#tampildata").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.Jk + "</td><td>" + data.notel + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                })
            });
        }

        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({
                        method: "Get",
                        url: '/apoteker/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.judul);
                        //var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        name = $("input[name='name']").val(data.name);
                        alamat = $("input[name='alamat']").val(data.alamat);
                        Jk = $("input[name='Jk']").val(data.Jk);
                        notel = $("input[name='notel']").val(data.notel);

                        $('#Edit').show();
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

        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "Get",
                url: '/apoteker/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {

                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td> Nama </td><td>: </td><td>" + data.name + "</td></tr>" +
                            "<tr><td> Alamat </td><td> : </td><td>" + data.alamat + "</td></tr>" +
                            "<tr><td> Jenis Kelamin </td><td> : </td><td>" + data.Jk + "</td></tr>" +
                            "<tr><td> No Telpon </td><td> : </td><td>" + data.notel + "</td></tr>"
                    );
                }
            });
        }

        function getAjax() {
            $("#data-example").children().remove();

            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-apoteker", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.Jk + "</td><td>" + data.notel + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                    })
                });
            }, 2200);
        }

    </script>
    </body>
    <!-- /.row -->
@endsection