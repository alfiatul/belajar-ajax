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
                        <h1>Data Obat</h1>
                        <button type="button" class="btn btn-outline btn-info"
                                onclick="Create()">Add
                        </button>
                    </div>
                    <center>
                        <div id="loader2">
                            <img src=" {!! asset('images/download4.gif') !!}">
                        </div>
                    </center>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            {{--                        @if (count($apoteker) > 0)--}}
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Apoteker</th>
                                    <th>Alamat</th>
                                    <th>Nama Obat</th>
                                    <th>Harga</th>
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
                        Tambah Data Obat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
                                    <div class="form-group">
                                        <label>Nama Apoteker</label>
                                        <label>:</label>
                                        <select id="id_apoteker" class="form-control" name="id_apoteker">
                                            </select>
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
                        Edit Data Obat #
                    </div>
                    <div class="panel-body">
                        {{--<form role="form">--}}
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Edit">
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label>Id Apoteker</label>
                                        <label>:</label>
                                        <input type="text" name="id_apoteker" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <label>:</label>
                                        <input type="text" name="nama_obat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <label>:</label>
                                        <input type="text" name="harga" class="form-control">
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
                        <fond face="Bernard MT">Detail Obat</fond>
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
                        id_apoteker = $form.find("select[name='id_apoteker']").val(),
                        nama_obat = $form.find("input[name='nama_obat']").val(),
                        harga = $form.find("input[name='harga']").val();

                //   $("From-Create").reset();

                var posting = $.post('/obat', {
                    id_apoteker: id_apoteker,
                    nama_obat: nama_obat,
                    harga: harga,
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
                        id_apoteker = $form.find("select[name='id_apoteker']").val(),
                        nama_obat = $form.find("select[name='nama_obat']").val(),
                        harga = $form.find("select[name='harga']").val();

                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/obat/' + id,
                    data: {
                        id_apoteker: id_apoteker,
                        nama_obat: nama_obat,
                        harga: harga
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
            $("input[name='id_apoteker']").val("");
            $("input[name='nama_obat']").val("");
            $("input[name='harga']").val("");
            getApoteker();

        }
        function getApoteker() {
            $('#id_apoteker').children().remove();
            $.getJSON("/data-apoteker", function (data) {
                var jumlah = data.length;
                $("#id_apoteker").append("<option selected>pilih nama apoteker</option>");
                $.each(data.slice(0, jumlah), function (i, data){
                    $("#id_apoteker").append("<option value='" + data.id + "'>"+data.name +"</option>")
                })
            })
        }

        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({
                        method: "Get",
                        url: '/obat/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        //var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        id_apoteker = $("select[name='id_apoteker']").val(data.id_apoteker);
                        nama_obat = $("input[name='nama_obat']").val(data.nama_obat);
                        harga = $("input[name='harga']").val(data.harga);


                        $('#Edit').show();
                    });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yankin Ingin Menghapus ?");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/obat/' + id,
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
                url: '/obat/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {

                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td>id_apoteker</td><td>: </td><td>" + data.id_apoteker + "</td></tr>" +
                            "<tr><td>nama_obat</td><td> : </td><td>" + data.nama_obat + "</td></tr>" +
                            "<tr><td>harga </td><td> : </td><td>" + data.harga + "</td></tr>"
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
                $.getJSON("/data-obat", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("<tr><td>" + data.apoteker.name + "</td><td>" + data.apoteker.alamat + "</td><td>" + data.nama_obat + "</td><td>" + data.harga + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                    })
                });
            }, 2200);
        }

    </script>
    </body>
    <!-- /.row -->
@endsection