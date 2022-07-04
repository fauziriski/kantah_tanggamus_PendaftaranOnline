@extends('user.layouts.app')
@section('title', 'Perpanjangan Hak Milik Atas Satuan Rumah Susun')
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
                <li>Sertipikat asli HGB (ada di Kantor Pertanahan yang bersangkutan).</li>
                <li>Fotokopi SPPT PBB tahun berjalan yang telah dicocokan dengan aslinya oleh petugas loket.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>20 hari untuk jumlah tidak lebih dari 200 unit.</li>
                    <li>40 hari untuk jumlah lebih dari 200 unit s/d 500 unit.</li>
                    <li>90 hari untuk jumlah lebih dari 500 unit.</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Jangka waktu perpanjangan Hak Milik Satuan Rumah Susun meliputi jangka waktu perpanjangan Hak Guna
                    Bangunan sebagai tanah bersama dan Pencatatan perpanjangan pada buku tanah dan sertipikat Hak Milik
                    Satuan Rumah Susun.</li>
                <li>Catatan: Jangka waktu tidak termasuk waktu yang diperlukan untuk pengiriman berkas/dokumen dari Kantor
                    Pertanahan ke Kantor Wilayah dan BPN RI maupun sebaliknya.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>Biaya Rp. 50.000 per sertipikat hak atas tanah.</li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('perpanjangan_hak_milik_rumah_susun.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info " role="button">Formulir Pendaftaran Pendaftaran
                        Hak Milik Atas Satuan Rumah Susun</a></li>
                <li><a href="" target="_blank" class="btn btn-info " role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
