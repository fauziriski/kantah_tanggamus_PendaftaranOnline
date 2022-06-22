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
                            <h3><b>Formulir Tanah Negara</b></h3>
                        </div>
                    </div>
                </div>
                <form action="/pemberian-hak-milik-perorangan/printPdf" method="post">
                    @csrf
                    <div class="formulir">
                        <table width="100%">
                            <tr>
                                <td rowspan="4" width="70%">
                                    {{-- <img src="http://localhost/aplikasiformulironlinebpnjaktim/assets/img/logo_hp.png"
                                        width="80px" /> --}}
                                </td>
                                <td>Kepada Yth.</td>
                            </tr>
                            <tr>
                                <td>Kepala Kantor Pertanahan</td>
                            </tr>
                            <tr>
                                <td>Kota Administrasi Tanggamus</td>
                            </tr>
                            <tr>
                                <td>di Kota Agung</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="30%">Yang bertanda tangan dibawah ini</td>
                                <td class="titik"><input type="text" name="nama"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="7.5%">Alamat</td>
                                <td class="titik"><input type="text" name="alamat"></td>
                                <td width="20.5%" align="right">dalam hal ini bertindak</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="18.5%">untuk dan atas nama</td>
                                <td class="titik"><input type="text" name="atasnama"></td>
                                <td width="21%" align="right">dengan ini mengajukan</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="15.5%">permohonan Hak</td>
                                <td width="35%" class="titik"><input type="text" name="permohonanhak"></td>
                                <td>Dengan keterangan sebagai berikut :</td>
                            </tr>
                        </table>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td class="garis" width="29%">A.&nbsp;&nbsp;&nbsp;&nbsp;MENGENAI DIRI PEMOHON
                                </td>
                                <td></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">NAMA</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="namapemohon"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">UMUR</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="umur"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">KEWARGANEGARAAN DAN ATAU KARTU</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text"
                                        name="kewarganegaraandanataukartu"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">PENDUDUK ATAUPUN SURAT KETERANGAN</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="pendudukataupun"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">DARI KEPALA DESA/CAMAT</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="darikepaladesacamat">
                                </td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">PEKERJAAN/JABATAN</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="pekerjaanjabatan"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">TEMPAT TINGGAL/KEDUDUKAN</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="tempattinggalkedudukan">
                                </td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">HUBUNGAN KELUARGA, Istri</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="hubungankeluargaistri">
                                </td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">anak yang menjadi tanggungan</td>
                                <td width="3%">:</td>
                                <td width="3%">1.</td>
                                <td class="titik"><input type="text" name="anak1"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="3%"></td>
                                <td width="3%">2.</td>
                                <td class="titik"><input type="text" name="anak2"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="3%"></td>
                                <td width="3%">3.</td>
                                <td class="titik"><input type="text" name="anak3"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">AKTE PENDIRIAN/PERATURAN BADAN HUKUM</td>
                                <td width="3%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="aktependirian"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">Tgl./Nomor Akta/peraturan pendiriannya tgl./nomor</td>
                                <td width="3%"></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">Keputusan Menteri Dalam Negeri</td>
                                <td width="3%"></td>
                                <td colspan="2"></td>
                            </tr>
                        </table>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td class="garis" width="38%">B.&nbsp;&nbsp;&nbsp;&nbsp;MENGENAI TANAH YANG DI
                                    MOHON</td>
                                <td></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">1. LETAKNYA</td>
                                <td width="17%">Jalan</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="letaktanah"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">Kecamatan</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="kecamatantanah">
                                </td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">Kelurahan</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="kelurahantanah">
                                </td>
                            </tr>

                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">Kotamadya Tanggamus</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="kotatanah"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td colspan="3">Daerah Tanggamus</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">LUAS</td>
                                <td class="titik" width="17%"><input type="text" name="luastanah"></td>
                                <td>M<sup>2</sup></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="12%">Surat ukur/tgl.</td>
                                <td width="22%" class="titik"><input type="text" name="suratukurtgl"></td>
                                <td width="4%">No.</td>
                                <td class="titik"><input type="text" name="suratukurno"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">Gambar Situasi Tgl.</td>
                                <td width="17%" class="titik"><input type="text" name="gambarsituasitgl"></td>
                                <td width="4%">No.</td>
                                <td class="titik"><input type="text" name="gambarsituasino"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%">BATAS-BATAS</td>
                                <td width="17%">UTARA</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="utara"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">TIMUR</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="timur"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">SELATAN</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="selatan"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="45%"></td>
                                <td width="17%">BARAT</td>
                                <td width="1%">:</td>
                                <td colspan="2" class="titik"><input type="text" name="barat"></td>
                            </tr>
                        </table>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td width="4%">x)</td>
                                <td>Disesuaikan dengan pejabat yang berwenang</td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td>vide Peraturan Menteri Dalam Negeri N. 6 Th, 1972</td>
                            </tr>
                            <tr>
                                <td width="4%">&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="4%">*)</td>
                                <td>Kalau permohonan bertindak sebagai kuasa</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table width="100%">
                            <tr>
                                <td width="70%"></td>
                                <td width="11%">2. STATUS</td>
                                <td class="titik"><input type="text" name="status"></td>
                            </tr>
                        </table>
                        <div class="page_break"></div>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%">2.</td>
                                <td width="41%">STATUS TANAH</td>
                                <td width="3%">:</td>
                                <td width="2%">Hak</td>
                                <td class="titik"><input type="text" name="hak"></td>
                                <td width="5%" align="right">Sertifikat</td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%"></td>
                                <td width="41%">(HAK YANG MELEKAT DI ATAS TANAH)</td>
                                <td width="3%"></td>
                                <td width="25%">SKPT/Ketitir/Surat Keterangan</td>
                                <td class="titik"><input type="text" name="skpt"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%"></td>
                                <td width="41%"></td>
                                <td width="3%"></td>
                                <td width="8%">Lurah tgl</td>
                                <td class="titik"><input type="text" name="lurahtgl"></td>
                                <td width="3%">No.</td>
                                <td class="titik"><input type="text" name="lurahno"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%">3.</td>
                                <td width="41%">JENIS TANAH</td>
                                <td width="3%">:</td>
                                <td><input type="text" name="jenistanah"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%">4.</td>
                                <td width="41%">PENGUASAANNYA</td>
                                <td width="3%">:</td>
                                <td><input type="text" name="penguasaannya"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="4%"></td>
                                <td width="41%" style="font-size:8.5pt">(Siapa yang menguasai sekarang kalau pemohon,
                                    apa</td>
                                <td width="3%"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="4%"></td>
                                <td width="41%" style="font-size:8.5pt">dasarnya sebutkan tanggal/nomor aktenya secara
                                    beruntun)</td>
                                <td width="3%"></td>
                                <td></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="4%">5.</td>
                                <td width="41%">TANAH AKAN DIPERGUNAKAN UNTUK</td>
                                <td width="3%">:</td>
                                <td><input type="text" name="dipergunakanuntuk"></td>
                            </tr>
                        </table>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td class="garis" width="44%">C.&nbsp;&nbsp;&nbsp;&nbsp;TANAH LAIN YANG
                                    DIPUNYAI SI PEMOHON</td>
                                <td width="5%"></td>
                                <td width="3%">:</td>
                                <td width="3%">1.</td>
                                <td width="4%">Hak</td>
                                <td class="titik"><input type="text" name="haklain"></td>
                                <td width="5%" align="center">Luas</td>
                                <td class="titik"><input type="text" name="luaslain"></td>
                                <td width="4%" align="right">M<sup>2</sup></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="44%"></td>
                                <td width="5%"></td>
                                <td width="3%"></td>
                                <td width="3%"></td>
                                <td width="11%">Sertifikat tgl</td>
                                <td class="titik"><input type="text" name="sertifikattgllain"></td>
                                <td width="3.8%" align="center">No.</td>
                                <td class="titik"><input type="text" name="sertifikatnolain"></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td width="4%"></td>
                                <td width="45%" rowspan="2" style="font-size:8.5pt">(sebutkan masing-masing tanahnya,
                                    luasnya dan kalau ada tanggal dan nomor sertifikatnya).</td>
                                <td width="3%">:</td>
                                <td width="3%">2.</td>
                                <td><input type="text" name="tanahlain2"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="3%"></td>
                                <td width="3%">3.</td>
                                <td><input type="text" name="tanahlain3"></td>
                            </tr>
                            <tr>
                                <td width="4%"></td>
                                <td width="3%"></td>
                                <td width="3%"></td>
                                <td width="3%">4.</td>
                                <td><input type="text" name="tanahlain4"></td>
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
