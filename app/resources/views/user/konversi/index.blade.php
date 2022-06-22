@extends('user.layouts.app')
@section('title', 'Konversi')
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
                <li>Bukti kepemilikan tanah atau alas hak milik adat atau bekas milik adat.</li>
                <li>Fotokopi SPPT dan PBB tahun berjalan yang telah dicocokan dengan aslinya oleh petugas loket, penyerahan
                    bukti SSB (BPHTB).</li>
                <li>Melampirkan bukti SSP/PPH sesuai dengan ketentuan.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <p class="padding">98 Hari Kerja</p><br />
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
                <li>Pernyataan tanah/bangunan dikuasai secara fisik.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <p class="padding">Biaya dihitung berdasarkan luas bidang yang dimohon</p><br />
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('konversi.form_pendaftaran') }}" target="_blank" class="btn btn-info"
                        role="button">Formulir Pendaftaran Konversi</a>
                </li>
                <li><a href="" target="_blank" class="btn btn-info" role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
