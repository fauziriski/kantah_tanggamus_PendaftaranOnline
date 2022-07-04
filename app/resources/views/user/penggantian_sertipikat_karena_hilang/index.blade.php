@extends('user.layouts.app')
@section('title', 'Penggantian Sertifikat Karena Hilang')
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
                <li>Fotokopi sertipikat, bila ada.</li>
                <li>Surat Pernyataan di bawah sumpah oleh pemegang hak atau yang menghilangkan.</li>
                <li>Surat tanda lapor kehilangan dari Kepolisian setempat.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>40 hari Kerja.</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
                <li>Pernyataan tanah tidak sengketa.</li>
                <li>Pernyataan tanah atau bangunan dikuasai secara fisik.</li>
                <li>Pengumuman di surat kabar.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>Biaya sumpah: 200.000</li>
                    <li>Biaya salinan Surat Ukur: 100.000</li>
                    <li>Biaya pendaftaran: 50.000</li>
                    <li><b>Total: 350.000</b></li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('penggantian_sertifikat_karena_hilang.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info" role="button">Formulir Pendaftaran Penggantian
                        Sertifikat Karena Hilang</a></li>
                <li><a href="" target="_blank" class="btn btn-info" role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
