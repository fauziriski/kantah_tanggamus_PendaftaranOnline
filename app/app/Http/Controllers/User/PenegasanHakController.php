<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Style\Font;

class PenegasanHakController extends Controller
{
    public function index()
    {
        return view('user.penegasan_hak.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {

        $template = new TemplateProcessor(public_path('word-template/penegasan_hak/pendaftaran_sk_penegasan_atau_penetapan.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';



        $strikethrough = '<w:r>
        <w:rPr>
            <w:strike w:val="1" />
            <w:dstrike w:val="0" />
        </w:rPr>
        <w:t xml:space="preserve">Hello World!</w:t>
    </w:r>';

        $fontStyle = new Font();
        $fontStyle->setBold(true);
        $fontStyle->setName('Tahoma');


        //set values in word
        $template->setValues(array(
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'alamat_kantor' => $request->alamat_kantor,
            'telepon_kantor' => $request->telepon_kantor,
            'alamat_rumah' => $request->alamat_rumah,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'no' => $request->no,
            'telepon' => $request->telepon,
            'jakarta' => $request->jakarta,
            'atasnama' => $request->atasnama,
            'jalantanah' => $request->jalantanah,
            'rttanah' => $request->rttanah,
            'rwtanah' => $request->rwtanah,
            'kecamatantanah' => $request->kecamatantanah,
            'kelurahantanah' => $request->kelurahantanah,
            'tanggal_sk' => $request->tanggal_sk,
            'nomor_sk' => $request->nomor_sk,
            'ktp_penerima_hak' => $request->ktp_penerima_hak ? $checkedBox : $unCheckedBox,
            'ktp_penerima_kuasa' => $request->ktp_penerima_kuasa ? $checkedBox : $unCheckedBox,
            'skpemberian' => $request->skpemberian ? $checkedBox : $unCheckedBox,
            'tanda_terima' => $request->tanda_terima ? $checkedBox : $unCheckedBox,
            'gambar_situasi' => $request->gambar_situasi ? $checkedBox : $unCheckedBox,
        ));

        if ($request->tanahdikuasai == 'pemohon') {
            $template->setValue('tanahdikuasai', $strikethrough);
        } elseif ($request->tanahdikuasai == 'orang lain') {
            $template->setValue('tanahdikuasai', 'test');
        } else {
            '';
        }



        $path = 'test/pembagian-hak-bersama/';
        $saveDocPath = public_path($path . 'pembagian-hak-bersama.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'pembagian-hak-bersama.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/pembagian-hak-bersama/pendaftaran_pembagian-hak-bersama.pdf";
        return redirect($file);
    }
}
