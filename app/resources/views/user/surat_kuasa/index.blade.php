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
                <form action="{{ route('surat_kuasa.printPdf') }}" method="post">
                    @csrf
                    <div class="formulir">
                        <center>
                            <h3 class="judul">SURAT KUASA</h3>
                        </center>
                        <table width="100%">
                            <tr>
                                <td><b>Yang bertanda tangan dibawah ini :</b></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="2%"> </td>
                                <td width="20%">Nama</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <td width="1%"> </td>
                                <td width="20%">Tempat Lahir</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="tempat_lahir"></td>
                            </tr>
                            <tr>
                                <td width="1%"> </td>
                                <td width="20%">Tanggal Lahir</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="date" name="tanggal_lahir"></td>
                            </tr>
                            <tr>
                                <td width="1%"> </td>
                                <td width="20%">KTP/SIM No</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="ktpsimno" min="1" step="1"
                                        maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                </td>
                            </tr>
                            <tr>
                                <td width="1%"> </td>
                                <td width="20%">Alamat</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="alamat"></td>
                            </tr>
                        </table>
                        <br>
                        {{-- <table width="100"%>
                            <a href="./surat_kuasa2.php">
                                <center><img src="{{ asset('user/assets/img/add.png') }}" width="20px"
                                        class="mr-3" /><b>ADD
                                        MORE</b></center>
                            </a>
                        </table> --}}


                        <table width="100%">
                            <tr>
                                <td><b>Dengan ini memberikan kuasa kepada:</b></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="2%"> </td>
                                <td width="25%">Nama</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="namakuasa"></td>
                            </tr>
                            <tr>
                                <td width="2%"> </td>
                                <td width="25%">Tempat Lahir</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="tempat_lahirkuasa"></td>
                            </tr>
                            <tr>
                                <td width="2%"> </td>
                                <td width="25%">Tanggal Lahir</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="date" name="tanggal_lahirkuasa"></td>
                            </tr>
                            <tr>
                                <td width="2%"> </td>
                                <td width="25%">KTP/SIM No</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="ktpsimnokuasa" min="1"
                                        step="1" maxlength="16"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
                            </tr>
                            <tr>
                                <td width="2%"> </td>
                                <td width="25%">Alamat</td>
                                <td width="1%">:</td>
                                <td class="titik"><input type="text" name="alamatkuasa"></td>
                            </tr>
                        </table>
                        <br>
                        <center>KHUSUS</center>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Untuk dan atas nama pemberi kuasa menghadap di Kantor Pertanahan Kabupaten
                                    Tanggamus, mengurus:</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>

                                <td width="4%">1. </td>
                                <td>Permohonan Pengukuran / Penetapan Batas / Penelitian</td>
                            </tr>
                            <tr>
                                <td width="4%">2. </td>
                                <td>Pendaftaran SK Hak</td>
                            </tr>
                            <tr>
                                <td width="4%">3. </td>
                                <td>Permohonan Konvensi</td>
                            </tr>
                            <tr>
                                <td width="4%">4. </td>
                                <td>Pendaftaran Peralihan Hak</td>
                            </tr>
                            <tr>
                                <td width="4%">5. </td>
                                <td>Pendaftaran Pemisahan / Penggabungan</td>
                            </tr>
                            <tr>
                                <td width="4%">6. </td>
                                <td>Pendaftaran Hipotik / Credit Verband / Fiduca / Roya</td>
                            </tr>
                            <tr>
                                <td width="4%">7. </td>
                                <td>Permohonan Sertipikat Pengganti Karena Hilang / Rusak</td>
                            </tr>
                            <tr>
                                <td width="4%">8. </td>
                                <td>Surat Keterangan Pendaftaran Tanah SKPT</td>
                            </tr>
                            <tr>
                                <td width="4%">9. </td>
                                <td>Pendaftaran Peningkatan Hak Atas Tanah</td>
                            </tr>
                            <tr>
                                <td width="4%">10. </td>
                                <td>Pendaftaran Permohonan Hak Atas Tanah</td>
                            </tr>
                            <tr>
                                <td width="4%">11. </td>
                                <td>Pengambilan Sertipikat</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Dan melakukan segala sesuatu yang berkaitan dengan pengurusan tersebut serta
                                    menerima sertipikatnya dari Kantor Pertanahan Tanggamus, atas sebidang tanah
                                    terletak di:</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="4.8%">Jalan</td>
                                <td class="titik"><input type="text" name="jalantanah"></td>
                                <td width="12%" align="center">Pekon/Kelurahan</td>
                                <td class="titik"><input type="text" name="kelurahantanah"></td>

                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="8%">Kecamatan</td>

                                <td class="titik"><input type="text" name="kecamatantanah"></td>
                                </td>
                                <td width="12%" align="right">Tanggamus</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td>Status Hak:</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">1. </td>
                                <td width="23%">Bekas Milik Adat/ V.I./C No.</td>
                                <td class="titik"><input type="text" name="bekasmilikadatno"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">2. </td>
                                <td width="11.5%">Hak Milik No.</td>
                                <td width="40%" class="titik"><input type="text" name="hakmilikno"></td>
                                <td width="15%" align="center">Pekon / Kelurahan</td>
                                <td class="titik"><input type="text" name="kelurahanhakmilik">

                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">3. </td>
                                <td width="21%">Hak Guna Bangunan No.</td>
                                <td width="30.5%" class="titik"><input type="text" name="hakgunabangunanno">
                                </td>
                                <td width="15%" align="center">Pekon / Kelurahan</td>
                                <td class="titik"><input type="text" name="kelurahanhakgunabangunan">

                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">4. </td>
                                <td width="12.5%">Hak Pakai No.</td>
                                <td width="39%" class="titik"><input type="text" name="hakpakaino"></td>
                                <td width="15%" align="center">Pekon / Kelurahan</td>
                                <td class="titik"><input type="text" name="kelurahanhakpakai">

                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">5. </td>
                                <td width="22.5%">Hipotik / Credit Verban No.</td>
                                <td class="titik"><input type="text" name="hipotikno"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">6. </td>
                                <td width="10%">SK Hak No.</td>
                                <td class="titik"><input type="text" name="skhakno"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%">7. </td>
                                <td class="titik"><input type="text" name="lainnya"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td>Demikian surat kuasa ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana
                                    mestinya.</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="68%"></td>
                                <td width="8%">Kota Agung,</td>
                                <td class="titik" align="center"></td>
                                <td width="10%"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="17%"></td>
                                <td width="15%">Pemohon/kuasa</td>
                                <td width="47%"></td>
                                <td width="20%">Pemberi kuasa,</td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="20%"></td>
                                <td width="20%" style="font-size:9pt;"></td>
                                <td width="39%"></td>
                                <td width="20%" style="font-size:9pt;">Materai Rp. 10.000,-</td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="8%"></td>
                                <td width="1%">(</td>
                                <td align="center" class="titik"><input type="text" disabled></td>
                                <td width="1%">)</td>
                                <td width="30%"></td>
                                <td width="1%">(</td>
                                <td align="center" class="titik"><input type="text" disabled></td>
                                <td width="1%">)</td>
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
