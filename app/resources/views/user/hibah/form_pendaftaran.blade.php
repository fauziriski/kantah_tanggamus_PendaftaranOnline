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
                            <h3><b>Pendaftaran Peralihan Hak - Hibah</b></h3>
                        </div>
                    </div>
                </div>
                <form action="/hibah/printPdf" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-12">
                            Perihal : <u>Pendaftaran Peralihan Hak - Hibah</u>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            Kepada<br>
                            Yth. Kepala Kantor Pertanahan<br>
                            Kabupaten Tanggamus<br>
                            JL. Ahmad Yani Komplek Perkantoran Pemda<br>
                            di Lampung
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
                            Pekerjaaan
                            <input type="text" class="form-control" name="pekerjaan"><br>
                            No. KTP / SIM
                            <input type="text" class="form-control" name="noktpsim"><br>
                            No. Telp / HP
                            <input type="text" class="form-control" name="notelphp"><br>
                            Alamat
                            <input type="text" class="form-control" name="alamat"><br>
                            RT.
                            <input type="text" class="form-control" name="rt"><br>
                            RW.
                            <input type="text" class="form-control" name="rw"><br>
                            No.
                            <input type="text" class="form-control" name="no"><br>
                            Kecamatan
                            <input type="text" class="form-control" name="kecamatan"><br>
                            Kelurahan
                            <input type="text" class="form-control" name="kelurahan"><br>
                            Dalam hal ini bertindak untuk dan atas nama :
                            <input type="text" class="form-control" name="atasnama"><br>
                            Dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana
                            perihal tersebut diatas dengan sebidang tanah :<br>
                            No. Hak Milik
                            <input type="text" class="form-control" name="nohakmilik"><br>
                            Kelurahan Hak Milik
                            <input type="text" class="form-control" name="kelurahanhakmilik"><br>
                            No. Hak Guna Bangunan
                            <input type="text" class="form-control" name="hakgunabangunan"><br>
                            Kelurahan Hak Guna Bangunan
                            <input type="text" class="form-control" name="kelurahanhakgunabangunan"><br>
                            No. Hak Pakai
                            <input type="text" class="form-control" name="hakpakai"><br>
                            Keluarahan Hak Pakai
                            <input type="text" class="form-control" name="kelurahanhakpakai"><br>
                            Jalan
                            <input type="text" class="form-control" name="jalan"><br>
                            RT.
                            <input type="text" class="form-control" name="rttanah"><br>
                            RW.
                            <input type="text" class="form-control" name="rwtanah"><br>
                            No.
                            <input type="text" class="form-control" name="nomoralamattanah"><br>
                            Kecamatan
                            <input type="text" class="form-control" name="kecamatantanah"><br>
                            Kelurahan
                            <input type="text" class="form-control" name="kelurahantanah"><br>
                            Kantor Pertanahan Kabupaten Tanggamus.<br>

                            Bersama ini kami serahkan Sertifikat Asli dan Syarat-syarat lain yang diperlukan:
                            <ol class="ol-new mt-2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="fotocopyktppemohon"
                                                        type="checkbox" value="Foto Copy KTP, KK (Pemohon) dilegalisi">
                                                    Foto Copy KTP, KK (Pemohon) dilegalisir
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="fotocopyktppenjual"
                                                        type="checkbox" value="Foto Copy KTP, KK Penjual (legalisir)">
                                                    Foto Copy KTP, KK Penjual (legalisir)
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="fotocopysuratnikah"
                                                        type="checkbox" value="Foto Copy Surat Nikah">
                                                    Foto Copy Surat Nikah
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="sk59" type="checkbox"
                                                        value="SK. 59 dari KANWIL BPN Lampung">
                                                    SK. 59 dari KANWIL BPN Lampung
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="aktajualbeli" type="checkbox"
                                                        value="Akta Jual Beli">
                                                    Akta Jual Beli
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="aktahibah" type="checkbox"
                                                        value="Akta Hibah">
                                                    Akta Hibah
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="pbbtahunberjalan"
                                                        type="checkbox" value="PBB tahun berjalan">
                                                    PBB tahun berjalan
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="suratnotaris" type="checkbox"
                                                        value="Surat Tugas / Pengantar dari Notaris">
                                                    Surat Tugas / Pengantar dari Notaris
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="fotocopysbb" type="checkbox"
                                                        value="Foto Copy SBB, dan SSP">
                                                    Foto Copy SBB, dan SSP
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="suratketeranganwaris"
                                                        type="checkbox" value="Surat Keterangan Waris">
                                                    Surat Keterangan Waris
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="aktapembagianhakbersama"
                                                        type="checkbox" value="Akta Pembagian Hak Bersama">
                                                    Akta Pembagian Hak Bersama
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="suratkuasa" type="checkbox"
                                                        value="Surat Kuasa jika dikuasakan">
                                                    Surat Kuasa jika dikuasakan
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </ol>
                            Kami menyatakan pula bahwa, bahan-bahan dan keterangan yang disampaikan tersebut di atas
                            adalah benar dan dapat dipertanggung-jawabkan, serta tanah dimaksud tidak dalam sengketa
                            dengan pihak lain dan saya bersedia mentaati dan memenuhi sesuai dengan hukum yang berlaku.
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                <i class="material-icons">save</i> SIMPAN DAN UNDUH PDF
                            </button>
                        </div>

                        <div class="col-12">

                        </div>
                    </div>
            </div>
            </form>
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
