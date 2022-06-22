@extends('user.layouts.app')
@section('title', 'Pemberian Hak Milik Perorangan')
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
                <li>Asli bukti kepemilikan tanah atau alas hak.</li>
                <li>Asli surat-surat bukti pelepasan hak dan pelunasan tanah dan rumah golongan III atau rumah yang dibeli
                    dari pemerintah.</li>
                <li>Fotokopi SPPT dan PBB tahun berjalan yang telah dicocokan dengan aslinya oleh petugas loket, penyerahan
                    bukti SSB (BPHTB).</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>38 hari untuk tanah pertanian yang luasnya tidak lebih dari 2 Ha</li>
                    <li>38 hari untuk tanah non pertanian yang luasnya tidak lebih dari 2.000 M2</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
                <li>Pernyataan tanah/bangunan dikuasai secara fisik.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <p class="padding">Biaya dihitung berdasarkan jumlah bidang dan luas masing-masing bidang</p><br />
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('pemberian_hak_milik_perorangan.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info" role="button">Formulir Pendaftaran Pemberian Hak
                        Milik Perorangan</a></li>
                <li><a href="" target="_blank" class="btn btn-info" role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
