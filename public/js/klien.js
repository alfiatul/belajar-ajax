function ResetHalke() {
    $("#halke").val("1"), $("#halke_prov").val("1"), $("#halke_kabkota").val("1")
}
function TombolTambah() {
    Mousetrap.unbind("ctrl+alt+r"), Mousetrap.unbind("ctrl+alt+f"), Mousetrap.unbind("ctrl+alt+x"), Mousetrap.bind("ctrl+alt+s", function () {
        $("#saveclose").val("0"), $("#myForm").submit()
    }), Mousetrap.bind("ctrl+alt+n", function () {
        $("#saveclose").val("1"), $("#myForm").submit()
    }), $("#infopaging").hide(), Kosongkan(), $("#id_prov").load("ajax.aspx?cmd=getprovinsi&selected=" + $("#def_prov").val()), $("#id_kabkota").load("ajax.aspx?cmd=getkabkota&id_prov=" + $("#def_prov").val() + "&selected=" + $("#def_kabkota").val()), $("#id_kabkota").removeAttr("disabled"), $("#SimpanTambah").show(), $("#widget-filter").hide(), $("#btnTambah").hide(), $("#form-cari").hide(), $("#btnRefresh").hide(), $("#btnFilter").hide(), $("#btnLaporan").hide(), $(".error.help-inline > .text-error").text(""), $("#maju").hide(), $("#mundur").hide(), $("#cmd").val("KlienSave"), $("#tgl_daftar").datepicker("setValue", TglHariIni()), $(ld).hide(), $(ft).show(), $(tj).text("Tambah"), $("#nama").focus()
}
function TombolFilter() {
    $("#widget-filter").toggle("show")
}
function TombolRefresh() {
    history.pushState("", "", "klien.aspx"), TombolReset()
}
function TombolPanduan() {
    var a = "http://files.enotaris.com/panduan/fo/klien.pdf";
    window.open(a)
}
function TombolReset() {
    $("#cari").val(""), $("#ftgl_daftar").val(""), $("#fprov").val(""), $("#fidprov").val(""), $("#fkabkota").val(""), $("#fidkabkota").val(""), $("#fkabkota").attr("disabled", "disabled"), $("#btn_fkabkota").attr("disabled", "disabled"), $("#ftracking").val(""), ResetHalke(), TampilData()
}
function TombolBatal() {
    $("#infopaging").show(), $("#btnTambah").show(), $("#form-cari").show(), history.pushState("", "", "klien.aspx"), $("#btnRefresh").show(), $("#btnFilter").show(), $("#btnLaporan").show(), ResetHalke(), $("#btnFilter").show(), Kosongkan(), TampilData(), $(ft).hide(), $(ld).show(), $(tj).text("Data"), $("#maju").show(), $("#mundur").show()
}
function Mundur() {
    $("#maju").attr("disabled", "disabled"), $("#mundur").attr("disabled", "disabled");
    var nilai = $("#halke").val();
    $("#halke").val(eval(nilai) - 1), TampilData()
}
function Maju() {
    $("#maju").attr("disabled", "disabled"), $("#mundur").attr("disabled", "disabled");
    var nilai = $("#halke").val();
    $("#halke").val(eval(nilai) + 1), TampilData()
}
function TampilData() {
    OpenLoading();
    var a = $("#cari").val(), t = $("#halke").val(), e = $("#ftgl_daftar").val(), o = $("#fidprov").val(), i = $("#fidkabkota").val(), l = $("#ftracking").val();
    // tampil data
    $.ajax({
        type: "post",
        url: "klien.aspx",
        data: "cmd=KlienTampil&nama=" + a + "&halke=" + t + "&tgl=" + e + "&id_prov=" + o + "&id_kabkota=" + i + "&tracking=" + l,
        success: function (a) {
            CloseLoading(), IsiData(a)
        },
        error: function () {
            CloseLoading(), $("#ListData").html("<table class='table table-striped'><thead><tr><th>Nama</th><th>No Telepon</th><th>Email</th><th>Tgl Daftar</th><th>Aksi</th></tr></thead><tbody><tr><td colspan='5'> Tunggu sebentar...</td></tr><tbody></table>"), $("#ListData").show()
        }
    })
}
function IsiData(a) {
    var t = a.indexOf("AccessKey");
    -1 != t && (window.location.href = "login.aspx");
    var t = a.indexOf("<!DOCTYPE html>");
    if (-1 != t) window.location.assign("login.aspx"); else {
        $("#ListData").html(a), $("#ListData").show();
        var e = $("#isprev").val(), o = $("#isnext").val();
        "False" == e ? $("#mundur").attr("disabled", "disabled") : $("#mundur").removeAttr("disabled"), "False" == o ? $("#maju").attr("disabled", "disabled") : $("#maju").removeAttr("disabled"), $("#infopaging").text($("#paging").val()), $("#cari").focus()
    }
    $("[rel='tooltip']").tooltip()
}
function EditData(id) {
    OpenLoading(), $.ajax({
        type: "post", url: "klien.aspx", data: "cmd=KlienEdit&id=" + id, success: function (data) {
            var n = data.indexOf("<!DOCTYPE html>");
            -1 != n && window.location.assign("login.aspx");
            var obj = $.parseJSON(data);
            $("#infopaging").hide(), $("#cmd").val("KlienEditSave"), $("#id").val(obj.RsList[0]._id), $("#nama").val(obj.RsList[0].nama), $("#email").val(obj.RsList[0].email), $("#notelp").val(obj.RsList[0].notelp), $("#alamat").val(obj.RsList[0].alamat), $("#id_prov").load("ajax.aspx?cmd=getprovinsi&selected=" + obj.RsList[0].id_prov), $("#id_kabkota").load("ajax.aspx?cmd=getkabkota&id_prov=" + obj.RsList[0].id_prov + "&selected=" + obj.RsList[0].id_kabkota), $("#id_kabkota").removeAttr("disabled");
            var jsonDate = obj.RsList[0].tgl_daftar, date = eval(jsonDate.replace(/\/Date\((\d+)\)\//gi, "new Date($1)")), getDate = TglDMY(date);
            $("#widget-filter").hide(), $("#tgl_daftar").datepicker("setValue", getDate), $("#catatan").val(obj.RsList[0].catatan), $("#cari").val(""), $("#btnFilter").hide(), $("#btnPanduan").show(), $("#SimpanTambah").hide(), $("#maju").hide(), $("#mundur").hide(), $("#form-cari").hide(), $("#btnTambah").hide(), ResetHalke(), $("#btnRefresh").hide(), $(ld).hide(), $(ft).show(), $("#nama").focus(), $(tj).text("Edit"), CloseLoading()
        }, error: function () {
        }
    })
}
function SimpanData() {
    return OpenSpinner(), $.ajax({
        type: "post",
        url: "klien.aspx",
        data: $("#myForm").serialize(),
        success: function (a) {
            var t = a.indexOf("<!DOCTYPE html>");
            -1 != t && window.location.assign("login.aspx"), CloseSpinner();
            var t = a.indexOf("Warning");
            -1 != t ? (ErrorSpinner(), $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show()) : ($("#cari").val(""), CloseSpinner(), Kosongkan(), TombolBatal(), $("#saveclose").val("1"), $("#nama").val(""), $("#email").val(""), $("#notelp").val(""), $("#catatan").val(""), $("#nama").focus(), $("#cari").val(""), ResetHalke(), $("#alert-notify").removeClass("alert-error"), $("#alert-notify").addClass("alert-success"), $("#alert-notify").html(a), $("#alert-notify").show(), $("#alert-notify").fadeOut(3e3))
        },
        error: function (a) {
            ErrorSpinner(), $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show()
        }
    }), !1
}
function SimpanTambahData() {
    return OpenSpinner(), $.ajax({
        type: "post",
        url: "klien.aspx",
        data: $("#myForm").serialize(),
        success: function (a) {
            var t = a.indexOf("<!DOCTYPE html>");
            -1 != t && window.location.assign("login.aspx");
            var t = a.indexOf("Warning");
            -1 != t ? (ErrorSpinner(), $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show()) : (CloseSpinner(), Kosongkan(), $("#alert-notify").removeClass("alert-error"), $("#alert-notify").addClass("alert-success"), $("#alert-notify").html(a), $("#alert-notify").show(), $("#alert-notify").fadeOut(3e3), $("#saveclose").val("1"), $("#nama").focus(), ResetHalke())
        },
        error: function (a) {
            $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show()
        }
    }), !1
}
function HapusData(a) {
    $.confirm({
        title: "Konfirmasi Hapus", text: "Yakin hapus data?", confirm: function () {
            return $.ajax({
                type: "POST",
                url: "klien.aspx",
                data: "cmd=KlienHapus&id=" + a,
                cache: !1,
                success: function (a) {
                    var t = a.indexOf("AccessKey");
                    -1 != t && window.location.assign("login.aspx");
                    var t = a.indexOf("Warning");
                    -1 != t ? (TampilData(), TombolReset(), $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show(), $("#alert-notify").delay(5e3).fadeOut("slow")) : (TampilData(), TombolReset(), $("#alert-notify").removeClass("alert-error"), $("#alert-notify").addClass("alert-success"), $("#alert-notify").html(a), $("#alert-notify").show(), $("#alert-notify").delay(5e3).fadeOut("slow"))
                },
                error: function (a) {
                    $("#alert-notify").removeClass("alert-success"), $("#alert-notify").addClass("alert-error"), $("#alert-notify").html(a), $("#alert-notify").show()
                }
            }), !1
        }, confirmButton: "Ya, hapus", cancelButton: "Batal", post: !0
    })
}
function getKabKota() {
    var a = $("#id_prov").val();
    $("#id_kabkota").load("ajax.aspx?cmd=getkabkota&id_prov=" + a), $("#id_kabkota").removeAttr("disabled")
}
function Kosongkan() {
    $("#nama").val(""), $("#email").val(""), $("#notelp").val(""), $("textarea").val(""), $("#catatan").val(""), $("#cari").val("")
}
function fprov_onblur() {
    function a() {
        "" == $("#fprov").val() ? ($("#fkabkota").val(""), $("#fidprov").val(""), $("#fidkabkota").val(""), $("#fkabkota").attr("disabled", "disabled"), $("#btn_fkabkota").attr("disabled", "disabled")) : ($("#fkabkota").removeAttr("disabled"), $("#btn_fkabkota").removeAttr("disabled"))
    }

    setTimeout(a, 500)
}
function fkabkota_onblur() {
    function a() {
        "" == $("#fkabkota").val() && $("#fidkabkota").val("")
    }

    setTimeout(a, 500)
}
function ModProvShow() {
    ModProvCari(), $("#modProv").modal("show"), $("#modProv").on("shown", function () {
        $("#halke_prov").val("1"), $("#cari_prov").focus()
    })
}
function ModProvCari() {
    var a = $("#cari_prov").val(), t = $("#halke_prov").val();
    $.ajax({
        type: "post", url: "ajax.aspx", data: "cmd=CariProvinsi&nama=" + a + "&halke=" + t, success: function (a) {
            var t = a.indexOf("AccessKey");
            -1 != t && window.location.assign("login.aspx"), $("#ListProv").html(a), $("#ListProv").show();
            var e = $("#isprevprov").val(), o = $("#isnextprov").val();
            "False" == e ? $("#mundur_prov").attr("disabled", "disabled") : $("#mundur_prov").removeAttr("disabled"), "False" == o ? $("#maju_prov").attr("disabled", "disabled") : $("#maju_prov").removeAttr("disabled"), $("#cari_prov").focus()
        }, error: function () {
            $("#ListProv").html("Tunggu sebentar..."), $("#ListProv").show()
        }
    })
}
function ModProvMundur() {
    var nilai = $("#halke_prov").val();
    $("#halke_prov").val(eval(nilai) - 1), ModProvCari()
}
function ModProvMaju() {
    var nilai = $("#halke_prov").val();
    $("#halke_prov").val(eval(nilai) + 1), ModProvCari()
}
function ModProvGetData(a, t) {
    $("#cari_prov").val(""), $("#fprov").val(a), $("#fidprov").val(t), $("#modProv").modal("toggle"), ResetHalke(), $("#fkabkota").val(""), $("#fidkabkota").val(""), $("#fkabkota").removeAttr("disabled"), $("#btn_fkabkota").removeAttr("disabled")
}
function ModKabKotaShow() {
    ModKabKotaCari(), $("#modKabKota").modal("show"), $("#modKabKota").on("shown", function () {
        $("#cari_kabkota").focus()
    })
}
function ModKabKotaCari() {
    {
        var a = $("#cari_kabkota").val(), t = $("#halke_kabkota").val(), e = $("#fidprov").val();
        $("#cari_prov").val()
    }
    $.ajax({
        type: "post",
        url: "ajax.aspx",
        data: "cmd=CariKabKota&nama=" + a + "&halke=" + t + "&id_prov=" + e,
        success: function (a) {
            var t = a.indexOf("AccessKey");
            -1 != t && window.location.assign("login.aspx"), $("#ListKabKota").html(a), $("#ListKabKota").show();
            var e = $("#isprevkabkota").val(), o = $("#isnextkabkota").val();
            "False" == e ? $("#mundur_kabkota").attr("disabled", "disabled") : $("#mundur_kabkota").removeAttr("disabled"), "False" == o ? $("#maju_kabkota").attr("disabled", "disabled") : $("#maju_kabkota").removeAttr("disabled"), $("#cari_kabkota").focus()
        },
        error: function () {
            $("#ListKabKota").html("Tunggu sebentar..."), $("#ListKabKota").show()
        }
    })
}
function ModKabKotaMundur() {
    var nilai = $("#halke_kabkota").val();
    $("#halke_kabkota").val(eval(nilai) - 1), ModKabKotaCari()
}
function ModKabKotaMaju() {
    var nilai = $("#halke_kabkota").val();
    $("#halke_kabkota").val(eval(nilai) + 1), ModKabKotaCari()
}
function ModKabKotaGetData(a, t) {
    $("#cari_kabkota").val(""), $("#fkabkota").val(a), $("#fidkabkota").val(t), $("#modKabKota").modal("toggle"), ResetHalke()
}
var ft = "#Form1", ld = "#ListData", tj = ".text-judul";
$(document).ready(function () {
    Mousetrap.stopCallback = function () {
        return !1
    }, Mousetrap.bind("ctrl+alt+t", function () {
        TombolTambah()
    }), Mousetrap.bind("ctrl+alt+f", function () {
        TombolFilter(), $("#cari_klien").focus()
    }), Mousetrap.bind("ctrl+alt+r", function () {
        TombolRefresh()
    }), Mousetrap.bind("ctrl+alt+c", function () {
        window.open("klien-laporan.aspx", "_parent")
    }), Mousetrap.bind("ctrl+alt+p", function () {
        TombolPanduan()
    }), Mousetrap.bind("ctrl+alt+s", function () {
        $("#saveclose").val("0"), $("#myForm").submit()
    }), Mousetrap.bind("ctrl+alt+n", function () {
        $("#saveclose").val("1"), $("#myForm").submit()
    }), Mousetrap.bind("ctrl+alt+b", function () {
        TombolBatal(), ResetHalke(), Mousetrap.unbind("ctrl+alt+s"), Mousetrap.unbind("ctrl+alt+n")
    }), Mousetrap.bind("ctrl+alt+x", function () {
        TombolReset()
    }), $("#navside #li-klien").attr("class", "active"), $("#navbar-collapse #li-klien").attr("class", "active"), $("#ftgl_daftar").daterangepicker(), $("#cari").keypress(function (a) {
        13 == a.which && (a.preventDefault(), ResetHalke(), TampilData())
    }), $("#cari_prov").keypress(function (a) {
        13 == a.which && (a.preventDefault(), ModProvCari(), $("#halke_prov").val("1"))
    }), $("#cari_kabkota").keypress(function (a) {
        13 == a.which && (a.preventDefault(), $("#halke_kabkota").val("1"), ModKabKotaCari())
    }), $("#saveclose").val("1");
    var a = getQueryVariable("_id"), t = GetUrlValue("cmd");
    switch (t) {
        case "edit":
            EditData(a);
            break;
        case "tambah":
            TombolTambah();
            break;
        default:
            IsiData($("#Content_isi").val())
    }
    $("#fprov").autocomplete({
        source: "ajax.aspx?cmd=ProvAutocomplete", minLength: 2, select: function (a, t) {
            $("#fidprov").val(t.item.id)
        }, html: !0, open: function () {
            $(".ui-autocomplete").css("z-index", 1e3)
        }
    }), $("#fkabkota").autocomplete({
        source: "ajax.aspx?cmd=KabKotaAutocomplete&id_prov=" + $("#fidprov").val(),
        minLength: 2,
        select: function (a, t) {
            $("#fidkabkota").val(t.item.id)
        },
        html: !0,
        open: function () {
            $(".ui-autocomplete").css("z-index", 1e3)
        }
    }), $("#SimpanKembali").click(function () {
        $("#saveclose").val("0")
    }), $("#SimpanTambah").click(function () {
        $("#saveclose").val("1")
    }), $("#tgl_daftar").datepicker(), $("#tgl_daftar").on("changeDate", function () {
        $("#tgl_daftar").datepicker("hide")
    })
}), $(function () {
    $.validator.setDefaults({}), $("#myForm").validate({
        submitHandler: function () {
            0 == $("#saveclose").val() ? SimpanData() : SimpanTambahData()
        },
        errorElement: "small",
        errorPlacement: function (a, t) {
            var e = t.parent();
            a.appendTo(e.is(".controls") ? e : e.parent()), a.addClass("help-inline")
        },
        rules: {
            nama: {minlength: 3, required: !0},
            id_kabkota: "required",
            id_prov: "required",
            notelp: "required",
            tgl_daftar: "required"
        },
        messages: {
            nama: {minlength: "minimal 3 karakter.", required: "Nama  wajib diisi."},
            id_kabkota: "Pilih Provinsi dan Kabupaten/Kota dulu.",
            id_prov: "Pilih Provinsi dulu.",
            tgl_daftar: "Tanggal daftar wajib diisi.",
            notelp: "No telepon Klien wajib diisi."
        },
        highlight: function (a) {
            $(a).closest(".control-group").addClass("error")
        },
        success: function (a) {
            $(a).closest(".control-group").removeClass("error")
        }
    })
});