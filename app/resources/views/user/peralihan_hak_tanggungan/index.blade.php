@extends('user.layouts.app')
@section('title', 'Peralihan Hak Tanggungan')
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
                <li>Surat Pengantar dari PPAT.</li>
                <li>Sertipikat asli (Hak Tanggungan dan Hak Atas Tanah).</li>
                <li>Surat tanda bukti peralihan (beralihnya piutang) berupa: Akta Cessie atau akta otentik yang menyatakan
                    adanya cessie tersebut, atau bukti pewarisan.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>Hari ketujuh.</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
                <li>Pernyataan tanah atau bangunan dikuasai secara fisik.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>Biaya Rp. 50.000 per sertipikat.</li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('peralihan_hak_tanggungan.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info " role="button">Formulir Pendaftaran Peralihan
                        Hak Tanggungan</a></li>
                <li><a href="" target="_blank" class="btn btn-info " role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
