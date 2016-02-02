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
                    <h1>Data Pelanggan</h1>
                </div>
                <button type="button" class="btn btn-outline btn-info"
                        onclick="Create()">Add
                </button>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" >
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
                                <tbody id="tampildata">
                                    {{--<tr class="">--}}
                                        {{--<td>{{ $data->name }}</td>--}}
                                        {{--<td>{{ $data->alamat }}</td>--}}
                                        {{--<td>{{ $data->noantrian }}</td>--}}
                                        {{--<td>{{ $data->Jk }}</td>--}}
                                        {{--<td>{{ $data->notel }}</td>--}}
                                        {{--<td>--}}
                                            {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                                    {{--onclick="location.href='/pelanggan/{{$data->id}}';">Detail--}}
                                            {{--</button>--}}
                                            {{--<button type="button" class="btn btn-outline btn-info"--}}
                                                    {{--onclick="location.href='/edit-pelanggan/{{$data->id}}';">Edit--}}
                                            {{--</button>--}}
                                            {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                                    {{--onclick="location.href='/hapus-pelanggan/{{$data->id}}';">Delete--}}
                                            {{--</button>--}}

                                        {{--</td>--}}
                                    {{--</tr>--}}
                                </tbody>
                            </table>
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
                        Tambah Data Pelanggan
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
                        Edit Data Pelanggan #
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
                                        <label>No Antrian</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="noantrian">
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
                                        <input type="submit" class="btn btn-outline btn-info" value="Simpan">

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
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        noantrian = $form.find("input[name='noantrian']").val(),
                        Jk = $form.find("input[name='Jk']").val(),
                        notel = $form.find("input[name='notel']").val();
                //   $("From-Create").reset();

                var posting = $.post('/pelanggan', {
                    name: name,
                    alamat: alamat,
                    noantrian: noantrian,
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
            $("input[name='noantrian']").val("");
            $("input[name='Jk']").val("");
            $("input[name='notel']").val("");
        }

        function getAjax() {
            $("#tampildata").children().remove();
            $.getJSON("/data-pelanggan", function (data) {
                $.each(data.slice(0, 9), function (i, data) {
                    $("#tampildata").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.noantrian + "</td><td>" + data.Jk + "</td><td>" + data.notel + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit(" + data.id + ")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                })
            });
        }
        function Edit(id) {
            $('#Create').hide();
            $('#Edit').show();
            $('#Index').hide();
            $.ajax({
                        method: "Get",
                        url: '/pelanggan/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.judul);
                        //var $form = $(this),
                        name = $("input[name='name']").val(data.name);
                        alamat = $("input[name='alamat']").val(data.alamat);
                        noantrian = $("input[name='noantrian']").val(data.noantrian);
                        Jk = $("input[name='Jk']").val(data.Jk);
                        notel = $("input[name='notel']").val(data.notel);

                        $('#Edit').show();
                    });
            $("#Form-Edit").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        noantrian = $form.find("input[name='noantrian']").val(),
                        Jk = $form.find("input[name='Jk']").val(),
                        notel = $form.find("input[name='notel']").val();

                $.ajax({
                            method: "PUT",
                            url: '/pelanggan/' + id,
                            data: {
                                name: name,
                                alamat: alamat,
                                noantrian: noantrian,
                                Jk: Jk,
                                notel: notel
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
                            url: '/pelanggan/' + id,
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