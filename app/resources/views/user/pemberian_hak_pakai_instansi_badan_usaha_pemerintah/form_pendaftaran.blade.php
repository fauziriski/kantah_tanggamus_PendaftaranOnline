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
.formulir *{font-size:12pt;}
.titik{border-bottom: 1px dotted #000;text-decoration: none;}
.formulir{width:none;margin:auto;border:1px solid #888;padding:20px;background-color:white;}
input[type=text],input[type=date],input[type=number],select{border: none;border-color: transparent;width:100%;font-size:10pt;}
h3.judul{font-size:14pt;font-weight:bold;text-decoration:underline;}
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
                            <h3><b></b></h3>
                        </div>
                    </div>
                </div>
                <form action="formulir_pemberian_hakpakai_pdf.php" method="post">
						<div class="formulir">
							<table width="100%">
								<tr>
									<td rowspan="7" width="70%">
									<b>Perihal :</b><br>
								Permohonan Pemberian Hak Pakai <br>
							    Untuk Perorangan / Badan Hukum<br>
										
									</td>
									<td>Kepada Yth.</td>

								</tr>
								<tr>
									<td>Menteri Agraria dan Tata Ruang</td>
								</tr>
								<tr>
									<td>Kepala Badan Pertanahan Nasional </td>
								</tr>
								<tr>
									<td>di Jakarta</td>
								</tr>
								<tr>
									<td>Kepala Kantor Pertanahan</td>
								</tr>
								<tr>
									<td>Kabupaten Tanggamus</td>
								</tr>
								<tr>
									<td>di Lampung</td>
								</tr>
							</table>
							<br>
							<br>
							<table width="100%">
								<tr>
									<td width="4%"></td>
									<td width="23%">Yang bertanda tangan dibawah ini</td>
									<td class="titik"><input type="text" name="nama"></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="15%">Bertempat tinggal di</td>
									<td class="titik"><input type="text" name="alamat1"></td>
									<td width="23%">Bedasarkan surat kuasa Nomor</td>
								<td class="titik"><input type="text" name="nokuasa1" ></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="7%">Tanggal</td>
									<td class="titik"><input type="text" name="tgl1" placeholder="di isi jika pemohonan dikuasakan" ></td>
									<td width="30%">dalam hal ini bertindak untuk dan atas nama</td>
								<td class="titik"><input type="text" name="atasnama"></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="18.5%">dengan ini mengajukan permohonan Hak Pakai dengan keterangan sebagai berikut :</td>
				
								</tr>
							</table>
							
							<hr>
							<table width="100%">
								<tr>
									<td class="garis" width="29%"><b>A.&nbsp;&nbsp;&nbsp;&nbsp;MENGENAI DIRI PEMOHON</b></td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">1.</td>
									<td width="29%">Untuk Pemohon Perorangan</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								
									<td width="4%"></td>
									<td width="45%">A.  Nama Pemohon</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="namapemohon"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">B.  Domisili/Tempat Kedudukan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="domisili"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">C.  Kewarganegaraan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="kewarganegaraan"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">D.  NIK atau No Visa/paspor/izin tinggal</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="nik"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">E.  Pekerjaan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="pekerjaan"></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">2.</td>
									<td width="29%">Untuk Pemohon Badan Hukum</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								
									<td width="4%"></td>
									<td width="45%">A.  Nama Pemohon</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="namapemohon2"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">B.  Domisili/Tempat Kedudukan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="domisili2"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">C.  Akta Pendirian Badan Hukum/ Perturan Pendirian Perusahaan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="aktahukum"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">D.  Pengesahan Badan Hukum</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="sah"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">E.  No Induk berusaha/ Tanda Daftar Perusahaan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="nousaha"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">F.  Bidang Usaha/Kegiatan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="bidangusaha"></td>
								</tr>
								
							</table>
							<br>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">3.</td>
									<td width="60%">Untuk Pemohon Badan Hukum Asing yang mempunyai perwakilan di Indonesia</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
									<td width="4%"></td>
									<td width="45%">A.  Nama Pemohon</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="namapemohon3"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">B.  Domisili/Tempat Kedudukan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="domisili3"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">C.  Surat Keterangan Berkedudukan di Indonesia</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="skb"></td>
								</tr>	
							</table>
							<br>
							<table width="100%">
								<tr>
									<td class="garis" width="29%"><b>B.&nbsp;&nbsp;&nbsp;&nbsp;MENGENAI TANAH YANG DIMOHON</b></td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">1.</td>
									<td width="29%">Letak</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								
									<td width="4%"></td>
									<td width="45%">Desa / Kelurahan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="kelurahan"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Kecamatan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="kecamatan"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Kabupaten / Kota</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="kota"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Provinsi</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="provinsi"></td>
								</tr>
							</table>
							<br>
								<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">2.</td>
									<td width="45%">Luas</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="luas"></td>
									<td width="10%">m²</td>
								</tr>
							</table>
							<br>
								<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">3.</td>
									<td width="45%">Peta Bidang Tanah</td>
									<td width="3%">:</td>
									<td width="3%">Tgl</td>
									<td class="titik"><input type="text" name="tglpbt" placeholder="DD/MM/YYYY"></td>
									<td width="6%">Nomor</td>
									<td class="titik"><input type="text" name="nopbt"></td>
									<td width="3%">NIB</td>
									<td class="titik"><input type="text" name="nibpbt" placeholder="Tulis Lengkap"></td>
								</tr>
							</table>
							<br>
						<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">4.</td>
									<td width="29%">Batas-batas</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								
									<td width="4%"></td>
									<td width="45%">Utara</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="utara"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Timur</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="timur"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Selatan</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="selatan"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									<td width="45%">Barat</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="barat"></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">5.</td>
									<td width="45%">Status Tanah</td>
									<td width="3%">:</td>
									<td width="49%">Tanah Negara / Tanah Hak Pengelolaan / Tanah Hak </td>
									
							</table>
							<br>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">6.</td>
									<td width="45%">Jenis / Keadaan Tanah</td>
									<td width="3%">:</td>
									<td colspan="2" class="titik"><input type="text" name="jenis" placeholder="Pertanan,hutan,semak dll"></td>
									<td></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">7.</td>
									<td width="45%">Dasar Perolehan Tanah</td>
									<td width="3%">:</td>
									<td class="titik"><input type="text" name="perolehan" placeholder="Hak Pakai No.../..." ></td>
								
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">8.</td>
									<td width="45%">Penggunaan Sekarang </td>
									<td width="3%">:</td>
									<td class="titik"><input type="text" name="penggunaansekarang" ></td>
								
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">9.</td>
									<td width="45%">Rencana Penggunaan </td>
									<td width="3%">:</td>
									<td class="titik"><input type="text" name="rencanapenggunaan" ></td>
								
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
									<td width="2%"></td>
									<td width="2%">10.</td>
									<td width="45%">Nomor Sertipikat Hak Pakai </td>
									<td width="3%">:</td>
									<td class="titik"><input type="text" name="nohp" ></td>
								</tr>
							</table>
							<br>
							<table width="100%">
								<tr>
								<td width="2%"></td>
									<td width="2%">11.</td>
									<td width="29%">Dasar Penguasaan atau alas haknya</td>
									<td></td>
								</tr>
							</table>
							<table width="100%">
								<tr>
								
									<td width="4%"></td>
									
									<td width="3%">a :</td>
									<td colspan="2" class="titik"><input type="text" name="alashak1"></td>
								</tr>
								<tr>
									<td width="4%"></td>
								
									<td width="3%">b :</td>
									<td colspan="2" class="titik"><input type="text" name="alashak2"></td>
								</tr>
								<tr>
									<td width="4%"></td>
								
									<td width="3%">c :</td>
									<td colspan="2" class="titik"><input type="text" name="alashak3"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									
									<td width="3%">e :</td>
									<td colspan="2" class="titik"><input type="text" name="alashak4"></td>
								</tr>
								<tr>
									<td width="4%"></td>
									
									<td width="3%">f :</td>
									<td colspan="2" class="titik"><input type="text" name="alashak5"></td>
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
