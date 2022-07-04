@extends('user.layouts.app')
@section('title', 'Surat Keterangan Pendaftaran Tanah')
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
                <li>Bukti hubungan hukum antara subjek dan objek hak.</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ul class="text-justify padding-right">
                    <li>4 hari Kerja.</li>
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
                    <li>Biaya Rp. 50.000 per surat keterangan pendaftaran tanah.</li>
                </ul><br />
            </div>
        </div>

        <div style="color:black; font-size:12pt;">
            <b class="padding font-weight-bold">Entri Dokumen</b><br /><br />
            <ol>
                <li><a href="{{ route('surat_keterangan_pendaftaran_tanah.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info " role="button">Formulir Pendaftaran Surat
                        Keterangan Pendaftaran Tanah</a></li>
                <li><a href="" target="_blank" class="btn btn-info " role="button">Surat Kuasa</a></li>
                <li><a href="" target="_blank" class="btn btn-info" role="button">Surat Pernyataan Keaslian
                        Sertifikat</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
