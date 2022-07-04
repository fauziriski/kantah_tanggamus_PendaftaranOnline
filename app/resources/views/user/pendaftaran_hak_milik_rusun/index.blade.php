@extends('user.layouts.app')
@section('title', 'Pendaftaran Hak Milik Atas Satuan Rumah Susun')
@section('content')
    <div class="body">
        <div style="color:black; font-size:12pt;">

            <b class="padding font-weight-bold">Persyaratan</b><br /><br />
            <ol class="text-justify padding-right">
                <li>Formulir permohonan yang sudah diisi dan ditandatangani pemohon atau kuasanya di atas materai cukup.
                </li>
                <li>Surat kuasa apabila dikuasakan.</li>
                <li>Fotokopi identitas pemohon (KTP/KK) dan kuasa apabila dikuasakan, yang telah dicocokan dengan aslinya
                    oleh petugas loket.</li>
                <li>Sertipikat hak atas tanah yang merupakan tanah bersama (asli).</li>
                <li>Proposal pembangunan rumah susun.</li>
                <li>Ijin layak huni.</li>
                <li>Advis Planning.</li>
                <li>Akta pemisahan yang dibuat oleh penyelenggara pembangunan rumah susun, dengan lampiran gambar dan uraian
                    pertelaan dalam arah vertikal maupun horizontal serta nilai perbandingan proposionalnya yang disahkan
                    oleh pejabat yang berwenang (Gubernur untuk DKI Jakarta atau Bupati/Walikota).</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>30 hari untuk jumlah tidak lebih dari 200 unit.</li>
                    <li>60 hari untuk jumlah lebih dari 200 unit s/d 500 unit.</li>
                    <li>90 hari untuk jumlah lebih dari 500 unit.</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>50.000 per sertipikat hak atas tanah untuk subsidi.</li>
                    <li>100.000 per sertipikat hak atas tanah untuk non subsidi.</li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('pendaftaran_hak_milik_rusun.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info " role="button">Formulir Pendaftaran Pendaftaran
                        Hak Milik Atas Satuan Rumah Susun</a></li>
                <li><a href="" target="_blank" class="btn btn-info " role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
