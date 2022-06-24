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
                            <h3><b>Formulir Peningkatan Hak</b></h3>
                        </div>
                    </div>
                </div>
                <form action="peningkatan_hak_pdf.php" method="post">
						<div class="formulir">
							<table width="100%">
								<tr>
									<td valign="top" width="15%">Lampiran I :</td>
									<td align="justify" style="border-bottom:1px solid #000;"><b>Keputusan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 6 tahun 1998 tanggal 26 Juni 1998 Tentang Pemberian Hak Milik Atas Tanah Untuk Rumah Tinggal.</b></td>
								</tr>
							</table>
							<br>
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
									<td>Kabupaten Tanggamus</td>
								</tr>
								<tr>
									<td></td>
									<td>di</td>
								</tr>
								<tr>
									<td></td>
									<td>Jl. Ahmad Yani Kota Agung</td>
								</tr>
								<tr>
									<td></td>
									<td>Tanggamus</td>
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
									<td width="25%">Pekerjaan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="pekerjaan"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="25%">Kewarganegaraan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="kewarganegaraan"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="25%">Tempat Tinggal</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="tempattinggal"></td>
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
									<td width="25%">Pekerjaan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="pekerjaankuasa"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="25%">Kewarganegaraan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="kewarganegaraankuasa"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="25%">Tempat Tinggal</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="tempattinggalkuasa"></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="30%">Berdasarkan surat kuasa tanggal</td>
									<td width="20%" class="titik"><input type="date" name="tanggalsuratkuasa"></td>
									<td width="9%" align="center">Nomor</td>
									<td class="titik"><input type="text" name="nomor"></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td align="justify">Dengan ini mengajukan permohonan Hak Milik Atas bidang tanah untuk rumah tinggal yang terletak di :</td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="5%"></td>
									<td width="35%">Jalan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="jalantanah"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="35%">Kecamatan</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="kecamatantanah">
										
									</td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="35%">Desa/Kelurahan *)</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="kelurahantanah">
										
									</td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="35%">Kabupaten/Kota Administrasi *)</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="kabupatenkotatanah"></td>
								</tr>
								<tr>
									<td width="5%"></td>
									<td width="35%">Propinsi</td>
									<td width="1%">:</td>
									<td class="titik"><input type="text" name="propinsitanah"></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="58%">yang semula terdaftar sebagai Hak Guna Bangunan/Hak Pakai *) No :</td>
									<td width="14%" class="titik"><input type="text" name="hakgunabangunanno"></td>
									<td width="1%">/</td>
									<td class="titik"><input type="text" name="hakgunabangunanno2"></td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td align="justify">berdasarkan Keputusan Menteri Negara Agraria/Kepala Badan Pertanahan Nasional Nomor 6 tahun 1998 tanggal 26 Juni 1998 Tentang Pemberian Hak Milik Atas Tanah Untuk Rumah Tinggal.</td>
								</tr>
							</table>
							<br>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td align="justify">Untuk melengkapi permohonan kami dimaksud, bersama ini kami lampirkan :</td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%">1.</td>
									<td width="48%">Sertipikat Hak Guna Bangunan/Hak Pakai *) Nomor</td>
									<td width="15%" class="titik"><input type="text" name="hakgunabangunannobaru"></td>
									<td width="1%">/</td>
									<td class="titik"><input type="text" name="hakgunabangunannobaru2"></td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%">2.</td>
									<td width="37%">Fotocopy Ijin Mendirikan Bangunan Nomor</td>
									<td class="titik"><input type="text" name="fotocopyijinnomor"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td colspan="2" align="justify">Surat Keterangan Kepala Desa/Kelurahan mengenai bahwa bangunan tersebut untuk rumah tinggal (karena Ijin Mendirikan Bangunan tidak/belum dikeluarkan oleh yang berwenang). *)</td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%">3.</td>
									<td width="41%">Fotocopy Kartu Tanda Penduduk (KTP) No :</td>
									<td class="titik"><input type="text" name="noktp"></td>
									<td width="1%">/</td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%"></td>
									<td width="12.5%">Paspor No. :</td>
									<td width="50%" class="titik"><input type="text" name="nopaspor"></td>
									<td width="">*)</td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%">4.</td>
									<td width="24.5%">Fotocopy SPT-PBB tahun</td>
									<td width="38%" class="titik"><input type="number" name="sptpbbtahun"></td>
									<td width=""></td>
								</tr>
							</table>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td width="4%" valign="top">5.</td>
									<td colspan="2" align="justify">Surat Pernyataan dari pemohon bahwa dengan perolehan Hak Milik ini yang bersangkutan akan mempunyai Hak Milik atas untuk rumah tinggal tidak lebih dari 5 (lima) bidang yang seluruhnya meliputi luas tidak lebih dari 5.000 (lima ribu) meter persegi.</td>
								</tr>
							</table>
							<br>
							<table width="100%" style="line-height:1.5;">
								<tr>
									<td colspan="2" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk permohonan pendaftaran Hak Milik tersebut, kami bersedia memenuhi kewajiban yang ditetapkan oleh Pemerintah.</td>
								</tr>
							</table>
														<table width="100%">
								<tr>
									<td width="74%">
									<td width="3%">Tanggamus</td>
									<td align="center" width="17%" class="titik"> </td>
									<td width="6%"></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="79%"></td>
									<td>Hormat Kami,</td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="81%"></td>
									<td>Pemohon</td>
								</tr>
							</table>
							<br>
							<br>
							<table width="100%">
								<tr>
									<td width="81%"></td>
									<td style="font-size:9pt;">Materai Rp.10.000</td>
								</tr>
							</table>
							<br>
							<br>
							<table width="100%">
								<tr>
									<td width="75%"></td>
									<td width="1%">(</td>
									<td align="center" class="titik"><input type="text" name="pemohon"></td>
									<td width="1%">)</td>
									<td width="2%"></td>
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
