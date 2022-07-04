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
                        <h1><img src="{{ asset('user/assets/img/logo.png') }}" width="150px" class="mr-3" /></h1>
                        <h2><b>SURAT KUASA</b></h2>

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
                <form action="{{ route('bphtb.printPdf') }}" method="post">
                    @csrf
                    <div class="formulir">
                        <center>
                            <h3 class="judul">SURAT PERNYATAAN</h3>
                        </center>
                        <table width="100%">
                            <tr>
                                <td>Yang bertanda tangan dibawah ini :</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="15%">Nama</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <td width="15%">Pekerjaan</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="pekerjaan"></td>
                            </tr>
                            <tr>
                                <td width="15%">Alamat</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="alamat"></td>
                            </tr>
                        </table>
                        <br>

                        <br>
                        <table width="100%">
                            <tr>
                                <td>Menyatakan dengan sesungguhnya, bahwa:</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%">1. </td>
                                <td width="36%">Terhadap tanah HM/HGB/HP/HGU Nomor:</td>
                                <td width="10%" class="titik"><input type="text" name="nomortanah"></td>
                                <td width="15%" align="center">Desa/Kelurahan</td>
                                <td class="titik"><input type="text" name="desakelurahan"></td>

                                </td>
                            </tr>
                        </table>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%"></td>
                                <td width="6.5%">/Dasar</td>
                                <td class="titik"><input type="text" name="atasdasar"></td>
                                <td width="18%" align="right">yang menjadi obyek</td>
                            </tr>
                        </table>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%"></td>
                                <td width="8.5%">peralihan</td>
                                <td class="titik"><input type="text" name="peralihan"></td>
                                <td width="21.5%" align="right">benar-benar Perhitungan</td>
                            </tr>
                        </table>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%"></td>
                                <td width="60.5%">Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB) adalah senilai Rp.
                                </td>
                                <td class="titik"><input type="text" name="pph"></td>
                            </tr>
                        </table>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%"></td>
                                <td width="1%">(&nbsp;</td>
                                <td class="titik"><input type="text" name="bilangan"></td>
                                <td width="29.6%" align="right">) yang telah saya bayarkan melalui</td>
                            </tr>
                        </table>
                        <table width="100%" style="padding-left:30px">
                            <tr>
                                <td width="4%"></td>
                                <td width="30%" class="titik"><input type="text" name="bayarmelalui"></td>
                                <td align="center" width="13%">pada tanggal</td>
                                <td width="20%" class="titik" align="center"><input type="date"
                                        name="tanggalbayar"></td>
                                <td>(bukti terlampir).</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%" style="padding-left:30px;">
                            <tr>
                                <td width="4%" valign="top">2.</td>
                                <td align="justify" style="line-height:1.6">Jika berdasarkan hasil pemeriksaan atau
                                    keterangan lain ditemukan data atau informasi yang menyebabkan pajak yang terhutang
                                    kurang bayar atau bukti setoran BPHTB yang saya lampirkan tidak sesuai dengan apa
                                    yang saya bayarkan/setorkan, maka saya bertanggung jawab, penuh/mutlak untuk
                                    membayar lunas kekurangan pajak dimaksud sesuai dengan ketentuan pasal 97
                                    Undang-Undang RI No.28 Tahun 2009 tentang Pajak Daerah dan Retribusi Daerah serta
                                    menerima segala bentuk akibat yang terjadi tanpa melibatkan pihak mana pun.</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Demikian untuk menjadi perhatian dan digunakan sebagaimana mestinya.</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="22.5%"></td>
                                <td>Mengetahui</td>
                                <td width="36%"></td>
                                <td width="8%">Kota Agung, </td>
                                <td width="20%" class="titik" align="center"></td>
                                <td width="20%"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="23%"></td>
                                <td width="5%">PPAT</td>
                                <td width="36%"></td>
                                <td width="30%">Yang membuat pernyataan</td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="20%"></td>
                                <td width="20%" style="font-size:9pt;"></td>
                                <td width="30%"></td>
                                <td width="20%" style="font-size:9pt;">Materai Rp. 10.000,-</td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <br>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="13%"></td>
                                <td width="27%"class="titik"><input type="text" disabled></td>
                                <td width="21.5%"></td>
                                <td width="27%" class="titik"><input type="text"
                                        name="yangmembuatpernyataan"></td>
                                <td></td>
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
