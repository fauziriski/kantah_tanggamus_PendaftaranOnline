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
                            <h3><b>Formulir Tanah Milik Adat</b></h3>
                        </div>
                    </div>
                </div>
                <form action="/konversi/printPdf" method="post">
                    @csrf
                    <div class="formulir">
                        <table width="100%">
                            <tr>
                                <td width="70%"></td>
                                <td>Kepada Yth.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bpk. Kepala Kantor Pertanahan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Kota Administrasi Tanggamus</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>di Kota Agung</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td>Dengan hormat,</td>
                            </tr>
                            <tr>
                                <td>Yang bertanda tangan dibawah ini:</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Nama</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Umur</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="number" name="umur"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Pekerjaan</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="pekerjaan"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Nomor KTP</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="noktp"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Alamat</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="alamat"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Dalam hal ini bertinda untuk dan atas nama diri sendiri/selaku kuasa dari *):</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Nama</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="namakuasa"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Umur</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="umurkuasa"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Pekerjaan</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="pekerjaankuasa"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Nomor KTP</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="noktpkuasa"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td width="25%">Alamat</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="alamatkuasa"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="30%">Berdasarkan surat kuasa Nomor</td>
                                <td class="titik"><input type="text" name="suratkuasanomor"></td>
                                <td width="7%" align="center">Tanggal</td>
                                <td class="titik"><input type="date" name="tanggalsuratkuasa"></td>
                                <td width="11%" align="right">dengan ini</td>
                            </tr>
                            <tr>
                                <td colspan="5">mengajukan permohonan : Penegasan/Pengakuan Hak</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Atas bidang tanah hak/tanah milik adat :</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="11%">Terletak di</td>
                                <td class="titik"><input type="text" name="terletakdi"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="11%">Kecamatan</td>
                                <td class="titik"><input type="text" name="kecamatantanah"><br>
                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="11%">Kelurahan</td>
                                <td class="titik"><input type="text" name="kelurahantanah"><br>
                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="17.5%">Kota Administrasi</td>
                                <td class="titik"><input type="text" name="kotaadministrasi"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="18%">Nomor Girik C No</td>
                                <td class="titik"><input type="text" name="girikcno"></td>
                                <td width="8.5%" align="center">/VI No.</td>
                                <td class="titik"><input type="text" name="vino"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="12%">Seluas (m<sup>2</sup>)</td>
                                <td class="titik"><input type="number" name="luastanah"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Untuk melengkapi permohonan dimaksud, bersama ini kami lampirkan :</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">1.</td>
                                <td class="titik"><input type="text" name="lampiran1"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">2.</td>
                                <td class="titik"><input type="text" name="lampiran2"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">3.</td>
                                <td class="titik"><input type="text" name="lampiran3"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">4.</td>
                                <td class="titik"><input type="text" name="lampiran4"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">5.</td>
                                <td class="titik"><input type="text" name="lampiran5"></td>
                            </tr>
                        </table>

                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                        <i class="material-icons">save</i> SIMPAN DAN UNDUH PDF
                    </button>
            </div>
            </form>
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
