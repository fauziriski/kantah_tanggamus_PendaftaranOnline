@extends('user.layouts.app')
@section('title', 'Roya')
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
                <li>Sertipikat tanah dan Sertipikat Hak Tanggungan dan atau konsen roya jika sertipikat Hak Tanggungan
                    hilang.</li>
                <li>Surat Roya atau Keterangan Lunas atau Pelunasan Hutang dari Kreditur.</li>
                <li>Fotokopi KTP pemberi HT (debitur), penerima HT (kreditur) dan atau kuasanya yang telah dicocokan dengan
                    aslinya oleh petugas loket.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>5 hari Kerja.</li>
                </ul>
            </div>
            <b class="padding font-weight-bold">Keterangan</b><br /><br />
            <ol>
                <li>Identitas diri.</li>
                <li>Luas, letak dan penggunaan tanah yang dimohon.</li>
            </ol><br />
            <b class="padding font-weight-bold">Tarif</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>Biaya Rp. 50.000 per sertipikat hak tanggungan.</li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('pendaftaran_roya.form_pendaftran') }}" target="_blank" class="btn btn-info "
                        role="button">Formulir Pendaftaran Roya</a>
                </li>
                <li><a href="" target="_blank" class="btn btn-info " role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
