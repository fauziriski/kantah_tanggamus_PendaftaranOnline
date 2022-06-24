<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('user/assets/img/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('user/assets/img/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Formulir Online - Kantor Pertanahan Kabupaten Tanggamus</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset('user/assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <link href="{{ asset('user/assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<style>
    .formulir * {
        font-size: 11pt;
    }

    .titik {
        border-bottom: 1px dotted #000;
        text-decoration: none;
    }

    .formulir {
        width: none;
        margin: auto;
        border: 1px solid #888;
        padding: 20px;
        background-color: white;
    }

    input[type=text],
    input[type=date],
    input[type=number],
    select {
        border: none;
        border-color: transparent;
        width: 100%;
        font-size: 10pt;
    }

    h3.judul {
        font-size: 14pt;
        font-weight: bold;
        text-decoration: underline;
    }
</style>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
        id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http:///">
                    <img src="{{ asset('user/assets/img/bh.png') }}" width="40 px" class="mr-3" /><b></b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter clear-filter " data-parallax="true"
        style="background-image: url('{{ asset('user/assets/img/aerial-background.jpg') }}');height: 35vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1><img src="{{ asset('user/assets/img/logo.png') }}" width="160px" class="mr-3" />
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic pt-0">
            <div class="alert alert-success">
                <div class="container">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    Harap lengkapi data dengan sebenar-benarnya
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title my-0">
                            <h3><b>Pendaftaran Ganti Blanko</b></h3>
                        </div>
                    </div>
                </div>
                <form action="/penegasan-hak/printPdf" method="post">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-12">
                            Perihal : <u>Pendaftaran Ganti Blanko</u>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            Kepada<br>
                            Yth. Kepala Kantor Pertanahan,<br>
                            Kabupaten Tanggamus<br>
                            Di Kota Agung
                        </div>
                        <div class="col-12">
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="col-12">
                            Yang bertanda tangan di bawah ini:
                            <br>
                            <br>
                        </div>

                        <div class="col-12">
                            Nama
                            <input type="text" class="form-control" name="nama"><br>
                            Pekerjaan / Karyawan PPAT
                            <input type="text" class="form-control" name="pekerjaan"><br>
                            Alamat Kantor
                            <input type="text" class="form-control" name="alamat_kantor"><br>
                            Telepon Kantor
                            <input type="text" class="form-control" name="telepon_kantor" min="1" step="1"
                                maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><br>
                            Alamat Rumah
                            <input type="text" class="form-control" name="alamat_rumah"><br>
                            Kelurahan
                            <input type="text" class="form-control" name="kelurahan"><br>
                            RT.
                            <input type="text" class="form-control" name="rt"><br>
                            RW.
                            <input type="text" class="form-control" name="rw"><br>
                            No.
                            <input type="text" class="form-control" name="no"><br>
                            Telepon
                            <input type="text" class="form-control" name="telepon" min="1" step="1" maxlength="13"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"><br>
                            Tanggamus.
                            <input type="text" class="form-control" name="jakarta"><br>
                            dalam hal ini bertindak untuk dan atas nama :
                            <input type="text" class="form-control" name="atasnama"><br>
                            dengan ini mengajukan permohonan Pendaftaran SK Penegasan/Penetapan, Pendaftaran Perubahan
                            Data, Pendaftaran Penurunan Hak, Pendaftaran Sertipikat Pengganti Karena Hilang/Rusak,
                            Pendaftaran Ganti Blanko untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal
                            tersebut di atas, atas sebidang tanah yang terletak di Jalan :
                            <input type="text" class="form-control" name="jalantanah"><br>
                            RT.
                            <input type="text" class="form-control" name="rttanah"><br>
                            RW.
                            <input type="text" class="form-control" name="rwtanah"><br>
                            Kecamatan
                            <input type="text" class="form-control" name="kecamatantanah"><br>
                            Kelurahan
                            <input type="text" class="form-control" name="kelurahantanah"><br>
                            Tanggamus.<br>
                            Tanah tersebut dikuasai oleh:
                            <div class="form-check mt-1">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tanahdikuasai"
                                        id="tanahdikuasai1" value="Pemohon">
                                    Pemohon
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tanahdikuasai"
                                        id="tanahdikuasai2" value="Orang lain">
                                    Orang lain
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>

                            Sebagai kelengkapan bahan-bahan permohonan, bersama ini dilampirkan:
                            <ol class="ol-new mt-2">
                                <li>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="ktp_penerima_hak"
                                                        type="checkbox" value="KTP Penerima Hak">
                                                    KTP Penerima Hak
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="ktp_penerima_kuasa"
                                                        type="checkbox" value="KTP Penerima Kuasa">
                                                    KTP Penerima Kuasa
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check mb-1">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="skpemberian" type="checkbox"
                                                        value="S.K. Pemberian dan Hak Kwitansi pelunasan uang Administrasi">
                                                    S.K. Pemberian dan Hak Kwitansi pelunasan uang Administrasi
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            Tanggal
                                            <input type="date" name="tanggal_sk" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            Nomor
                                            <input type="text" name="nomor_sk" class="form-control">
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="tanda_terima" type="checkbox"
                                                        value="Tanda terima surat-surat asli, apabila sudah diserahkan">
                                                    Tanda terima surat-surat asli, apabila sudah diserahkan
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="gambar_situasi"
                                                        type="checkbox" value="Gambar Situasi">
                                                    Gambar Situasi
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="pelunasan_pbb"
                                                        type="checkbox" value="Pelunasan PBB">
                                                    Pelunasan PBB
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            Kami menyatakan pula bahwa, bahan-bahan dan keterangan yang disampaikan tersebut diatas
                            adalah benar dan dapat dipertanggungjawabkan, serta tanah yang dimaksud tidak dapat sengketa
                            dengan pihak lain dan saya bersedia mentaati dan mematuhi persyaratan yang ditetapkan.
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                <i class="material-icons">save</i> SIMPAN DAN UNDUH PDF
                            </button>
                        </div>

                        <div class="col-12">

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    <footer class="footer" data-background-color="black">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="">Layanan Antrian Online</a>
                    </li>
                    <li>
                        <a href="">Layanan Formulir Online</a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                Kantor Pertanahan Kabupaten Tanggamus
            </div>
        </div>
    </footer>

    <script src="{{ asset('user/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/core/bootstrap-material-design') }}.min.js" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.chained.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/assets/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#kelurahan").chained("#kecamatan");
            $("#kelurahantanah").chained("#kecamatantanah");
        });
    </script>
</body>

</html>
