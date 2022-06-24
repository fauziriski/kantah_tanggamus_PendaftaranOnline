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
                            <h3><b>Permohonan Untuk Roya Hak Tanggungan</b></h3>
                        </div>
                    </div>
                </div>
                <form action="permohonan_untuk_roya_hak_tanggungan_pdf.php" method="post">
						<div class="row">
							<div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-12">
								Perihal : <u>Permohonan Untuk Roya Hak Tanggungan</u>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
								Kepada<br>
								Yth. Kepala Kantor Pertanahan<br>
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
								Pekerjaan
								<input type="text" class="form-control" name="pekerjaan"><br>
								Alamat
								<input type="text" class="form-control" name="alamat"><br>
								RT.
								<input type="text" class="form-control" name="rt"><br>
								RW.
								<input type="text" class="form-control" name="rw"><br>
								No.
								<input type="text" class="form-control" name="no"><br>
								Kelurahan
								<input type="text" class="form-control" name="kelurahan"><br>
								Tanggamus.
								<input type="text" class="form-control" name="jakarta"><br>
								Telepon
								<input type="text" class="form-control" name="telepon"min="1" step="1" maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><br>
								dalam hal ini bertindak untuk dan atas nama :
								<input type="text" class="form-control" name="atasnama"><br>
								dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal tersebut diatas, atas sebidang tanah HM / HGB Nomor
								<input type="text" class="form-control" name="hmnomor" placeholder="HM Nomor"><br>
								<input type="text" class="form-control" name="hgbnomor" placeholder="HGB Nomor"><br>
								Yang terletak di jalan
								<input type="text" class="form-control" name="jalantanah"><br>
								RT.
								<input type="text" class="form-control" name="rttanah"><br>
								RW.
								<input type="text" class="form-control" name="rwtanah"><br>
								Kecamatan
								<input type="text" class="form-control" name="kecamatantanah"><br>
								Kelurahan
								<input type="text" class="form-control" name="kelurahantanah"><br>
								Tanah tersebut dikuasai oleh:
								<div class="form-check mt-1">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="tanahdikuasai" id="tanahdikuasai1" value="Pemohon">
										Pemohon
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="tanahdikuasai" id="tanahdikuasai2" value="Orang lain">
										Orang lain
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
								<br>
								Sebagai kelengkapan permohonan, bersama ini dilampirkan :<br>
								<ol class="ol-new mt-2">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="ktppenerima" type="checkbox" value="KTP Penerima Kuasa">
														KTP Penerima Kuasa
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="kuasamengurus" type="checkbox" value="Kuasa mengurus Surat Tugas">
														Kuasa mengurus Surat Tugas
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="sertipikathak" type="checkbox" value="Sertipikat Hak Atas Tanah">
														Sertipikat Hak Atas Tanah
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="aktahaktanggungan" type="checkbox" value="Akta Hak Tanggungan">
														Akta Hak Tanggungan
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="skhmt" type="checkbox" value="SKHMT apabila ada">
														SKHMT apabila ada
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="anggarandasar" type="checkbox" value="Anggaran Dasar pemberi Hak Tanggungan">
														Anggaran Dasar pemberi Hak Tanggungan
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
														<input class="form-check-input" name="risalahdapat" type="checkbox" value="Risalah Dapat Penunjukan Pengurus Perseroan">
														Risalah Rapat Penunjukan Pengurus Perseroan
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="persetujuansuami" type="checkbox" value="Persetujuan Suami/Istri/Kom/RUPS/sesuai Anggaran Dasar">
														Persetujuan Suami/Istri/Kom/RUPS/sesuai Anggaran Dasar
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="suratdaribi" type="checkbox" value="Surat pemberitahuan dari B.I. jika kreditur asing">
														Surat pemberitahuan dari B.I. jika kreditur asing
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="sertipikathaktanggungan" type="checkbox" value="Sertipikat Hak Tanggungan">
														Sertipikat Hak Tanggungan
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="suratroya" type="checkbox" value="Surat Roya">
														Surat Roya
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" name="pelunasanpbb" type="checkbox" value="Pelunasan PBB">
														Pelunasan PBB
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
											</li>
										</div>
									</div>
								</ol>
								<br>
								Kami menyatakan pula bahwa, bahan-bahan dan keterangan yang disampaikan tersebut diatas adalah benar dan dapat dipertanggungjawabkan, serta tanah yang dimaksud tidak dapat sengketa dengan pihak lain dan saya bersedia mentaati dan mematuhi persyaratan yang ditetapkan.
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
