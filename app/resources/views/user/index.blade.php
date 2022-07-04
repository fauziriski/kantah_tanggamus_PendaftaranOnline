<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('user/assets/img/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Layanan ATR/BPN Tanggamus</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('user/assets/img/logo.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('user/assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <link href="{{ asset('user/assets/demo/demo.css') }}" rel="stylesheet" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('user/assets/js/search.js') }}"></script>




    <style type="text/css">
        .padding {
            padding: 15px;
        }

        .padding-right {
            padding-right: 10px;
        }

        .form-control {
            width: 25%;
        }

        input[type=search] {
            float: right;
            border: 1px solid #0af;
            margin-bottom: 0px;

        }

        .btn-huge {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 12pt;
            text-transform: uppercase;
            font-weight: bold !important;
            text-shadow: 1px 1px gray;
        }

        .form-control-label {
            text-align: left;
            padding-left: 16px;
            padding-top: 0px;
            font-family: 'Roboto', 'Ubuntu', 'Catamaran', serif;
            font-size: 11pt;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            background: red;
            cursor: inherit;
            display: block;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            display: block;
            /*width: 100%;*/
            text-align: center;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .form-control.bold {
            font-weight: bold;
        }
    </style>

</head>

<body class="jumbotron">
    <div class="container-fluid">
        <div class="header">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";>
                <div class="page-header header-filter clear-filter " data-parallax="true"
                    style="background-image: url('{{ asset('user/assets/img/aerial-background.jpg') }}');height: 35vh;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <div class="brand">
                                    <h1><img class="mx-auto d-block img-fluid padding" width="160" height="45"
                                            src="{{ asset('user/assets/img/logo.png') }}" width=""
                                            class="mr-3" /></h1>
                                    <h3 class="text-center" style="padding-bottom: 15px;">SILAHKAN PILIH JENIS LAYANAN
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="body table-responsive">
                    <table class="table table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr class="">
                                <th>
                                    <div>
                                        <input type="search" class="form-control light-table-filter padding-left"
                                            data-table="table-hover" placeholder="Cari Layanan..." />
                                    </div>Nama Layanan
                                </th>
                            </tr>
                        </thead>
                        <tr>
                            <td> <a href="/jual-beli">Jual Beli</a></td>
                        </tr>
                        <tr>
                            <td><a href="/pewarisan">Pewarisan</a></td>
                        </tr>
                        <tr>
                            <td><a href="/tukar-menukar">Tukar Menukar</a></td>
                        </tr>
                        <tr>
                            <td><a href="/lelang">Lelang</a></td>
                        </tr>
                        <tr>
                            <td><a href="/hibah">Hibah</a></td>
                        </tr>
                        <tr>
                            <td><a href="/pembagian-hak-bersama/form-pendaftaran">Pembagian Hak
                                    Bersama</a></td>
                        </tr>
                        <tr>
                            <td><a href="/pemasukan-ke-dalam-perusahaan">Pemasukan Ke Dalam
                                    Perusahaan</a></td>
                        </tr>
                        <tr>
                            <td><a href="/pemecahan">Pemecahan</a></td>
                        </tr>
                        <tr>
                            <td><a href="/pemisahan">Pemisahan</a></td>
                        </tr>
                        <tr>
                            <td><a href="/penggabungan">Penggabungan</a></td>
                        </tr>
                        <tr>
                            <td><a href="/konversi">Konversi</a></td>
                        </tr>
                        <tr>
                            <td><a href="/penegasan-hak">Pengakuan/Penegasan Hak</a></td>
                        </tr>
                        <tr>
                            <td><a href="/wakaf">Wakaf</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_milik_perorangan') }}">Pemberian Hak
                                    Milik Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_milik_badan_hukum') }}">Pemberian Hak
                                    Milik Badan Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_guna_usaha_perorangan') }}">Pemberian
                                    Hak Guna Usaha Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_guna_usaha_badan_hukum') }}">Pemberian
                                    Hak Guna Usaha Badan Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_guna_bangunan_perorangan') }}">Pemberian
                                    Hak Guna Bangunan Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_guna_bangunan_badan_hukum') }}">Pemberian
                                    Hak Guna Bangunan Badan Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_pakai_perorangan') }}">Pemberian Hak
                                    Pakai
                                    Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_pakai_badan_hukum') }}">Pemberian Hak Pakai Badan
                                    Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pemberian_hak_pakai_instansi_badan_usaha_pemerintah') }}">Pemberian
                                    Hak Pakai Instansi/Badan Usaha Pemerintah</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_guna_usaha_perorangan') }}">Pembaruan Hak Guna Usaha
                                    Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_guna_usaha_badan_hukum') }}">Pembaruan Hak Guna
                                    Usaha Badan Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_guna_bangunan_perorangan') }}">Pembaruan Hak Guna
                                    Bangunan Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_guna_bangunan_badan_hukum') }}">Pembaruan Hak Guna
                                    Bangunan Badan Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_pakai_perorangan') }}">Pembaruan Hak Pakai
                                    Perorangan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_pakai_badan_hukum') }}">Pembaruan Hak Pakai Badan
                                    Hukum</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pembaruan_hak_pakai_instansi_badan_usaha_pemerintah') }}">Pembaruan
                                    Hak Pakai Instansi/Badan Usaha Pemerintah</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('perpanjangan_hak_guna_bangunan_dan_hak_pakai') }}">Perpangjangan
                                    Hak Guna Bangunan Dan Hak Pakai</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('perpanjangan_hak_guna_usaha') }}">Perpanjangan Hak Guna Usaha</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('perubahan_hak') }}">Perubahan Hak</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('wakaf_dari_tanah_terdaftar') }}">Wakaf Dari Tanah Terdaftar</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pengembalian_batas') }}">Pengembalian Batas</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pengukuran_untuk_mengetahui_luas') }}">Pengukuran Untuk Mengetahui
                                    Luas</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('penggantian_sertifikat_karena_hilang') }}">Penggangtian Sertifikat
                                    Karna Hilang</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('penggantian_sertifikat_karena_rusak') }}">Penggangtian Sertifikat
                                    Karna Rusak</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('penggantian_sertifikat_karena_blanko_lama') }}">Penggantian
                                    Sertifikat Karna Blanko Lama</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pengecekan_sertifikat') }}">Pengecekan Sertifikat</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('surat_keterangan_pendaftaran_tanah') }}">Surat Keterangan
                                    Pendaftaran Tanah</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('blokir') }}">Blokir</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('sita') }}">Sita</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pengangkatan_sita') }}">Pengangkatan Sita</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('hak_tanggungan') }}">Hak Tanggungan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pendaftaran_roya') }}">Roya</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('peralihan_hak_tanggungan') }}">Peralihan Hak Tanggungan</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('perubahan_kreditur') }}">Perubahan Kreditur</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('pendaftaran_hak_milik_rusun') }}">Pendaftaran Hak Milik Atas
                                    Satuan Rumah
                                    Susun</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('perpanjangan_hak_milik_rumah_susun') }}">Perpanjangan Hak Milik
                                    Atas Satuan Rumah
                                    Susun</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
