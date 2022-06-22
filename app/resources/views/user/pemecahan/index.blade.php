@extends('user.layouts.app')
@section('title', 'Pemecahan')
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
                <li>Fotokopi akta pendirian dan pengesahan badan hukum yang telah dicocokan dengan aslinya oleh petugas
                    loket, bagi badan hukum.</li>
                <li>Sertifikat Asli.</li>
                <li>Rencana Tapak/Site Plan dari Pemerintah Kabupaten/Kota setempat</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <p class="padding">5 Hari Kerja</p><br />
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
                <li>Pernyataan tanah/bangunan dikuasai secara fisik.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <p class="padding">Biaya dihitung berdasarkan nilai tanah yang dikeluarkan oleh Kantor Pertanahan dengan rumus :
                (nilai tanah per m2 * luas tanah m2) / 1000</p><br />
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="/pemecahan/form-pendaftaran" target="_blank" class="btn btn-info" role="button">Formulir
                        Pendaftaran Pemecahan</a>
                </li>
                <li><a href="" target="_blank" class="btn btn-info">Surat BPHTB</a></li>
            </ol>
        </div>
        <br />

    </div>
@endsection
