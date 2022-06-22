@extends('user.layouts.app')
@section('title', 'Pemberian Hak Guna Bangunan Badan Hukum')
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
                <li>Fotokopi Tanda Daftar Perusahaan, Akta Pendirian, Pengesahan Badan Hukum dan bukti pengumuman dalam
                    Lembaran Negara yang telah dicocokan dengan aslinya oleh petugas loket.</li>
                <li>Ijin Lokasi atau Surat Ijin Penunjukan Penggunaan Tanah.</li>
                <li>Bukti perolehan tanah atau alas hak dari pemilik atau penggarap tanah atau pemegang aset tanah, atau SK
                    pelepasan kawasan hutan.</li>
                <li>Proposal atau Rencana Penggunaan Tanah jangka pendek dan jangka panjang.</li>
                <li>Ijin usaha dari instansi teknis.</li>
                <li>Fotokopi SPPT dan PBB tahun berjalan yang telah dicocokan dengan aslinya oleh petugas loket, penyerahan
                    bukti SSB (BPHTB) dan bukti bayar uang pemasukan (pada saat pendaftaran hak).</li>
            </ol><br />
            <b class="padding font-weight-bold">Penyelesaian</b><br />
            <div class="padding" style="padding-left: 0px;">
                <ol class="text-justify padding-right">
                    <li>38 hari untuk luasan tidak lebih dari 200 Ha.</li>
                    <li>78 hari untuk luasan lebih dari 200 Ha s/d 1.000 Ha.</li>
                    <li>93 hari untuk luasan lebih dari 1.000 Ha s/d 3.000 Ha.</li>
                    <li>108 hari untuk luasan lebih dari 3.000 Ha s/d 6.000 Ha.</li>
                    <li>123 hari untuk luasan lebih dari 6.000 Ha s/d 9.000 Ha.</li>
                    <li>138 hari untuk luasan lebih dari 9.000 Ha.</li>
                </ol>
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
                <li><a href="{{ route('pemberian_hak_guna_bangunan_badan_hukum.form_pendaftaran') }}" target="_blank"
                        class="btn btn-info" role="button">Formulir Pendaftaran Pemberian Hak
                        Guna Bangunan Badan Hukum</a></li>
                <li><a href="" target="_blank" class="btn btn-info" role="button">Surat Kuasa</a></li>
            </ol>
        </div>
        <br />




    </div>
@endsection
