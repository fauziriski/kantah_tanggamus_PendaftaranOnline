<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class PembagianHakController extends Controller
{
    public function index()
    {
        return view('user.pembagian_hak.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {
        $template = new TemplateProcessor(public_path('word-template/hibah/pembagian_hak_bersama.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        //set values in word
        $template->setValues(array(
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'noktpsim' => $request->noktpsim,
            'notelphp' => $request->notelphp,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'no' => $request->no,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'atasnama' => $request->atasnama,
            'nohakmilik' => $request->nohakmilik,
            'kelurahanhakmilik' => $request->kelurahanhakmilik,
            'hakgunabangunan' => $request->hakgunabangunan,
            'kelurahanhakgunabangunan' => $request->kelurahanhakgunabangunan,
            'hakpakai' => $request->hakpakai,
            'kelurahanhakpakai' => $request->kelurahanhakpakai,
            'hakgunabangunan' => $request->hakgunabangunan,
            'kelurahanhakgunabangunan' => $request->kelurahanhakgunabangunan,
            'hakpakai' => $request->hakpakai,
            'kelurahanhakpakai' => $request->kelurahanhakpakai,
            'jalan' => $request->jalan,
            'rtt' => $request->rttanah,
            'rwt' => $request->rwtanah,
            'not' => $request->nomoralamattanah,
            'kecamatantanah' => $request->kecamatantanah,
            'kelurahantanah' => $request->kelurahantanah,
            'nohakmilik' => $request->nohakmilik,
            'nohakmilik' => $request->nohakmilik,
            '1' => $request->fotocopyktppemohon ? $checkedBox : $unCheckedBox,
            '2' => $request->fotocopyktppenjual ? $checkedBox : $unCheckedBox,
            '3' => $request->fotocopysuratnikah ? $checkedBox : $unCheckedBox,
            '4' => $request->sk59 ? $checkedBox : $unCheckedBox,
            '5' => $request->aktajualbeli ? $checkedBox : $unCheckedBox,
            '6' => $request->aktahibah ? $checkedBox : $unCheckedBox,
            '7' => $request->pbbtahunberjalan ? $checkedBox : $unCheckedBox,
            '8' => $request->suratnotaris ? $checkedBox : $unCheckedBox,
            '9' => $request->fotocopysbb ? $checkedBox : $unCheckedBox,
            '10' => $request->suratketeranganwaris ? $checkedBox : $unCheckedBox,
            '11' => $request->aktapembagianhakbersama ? $checkedBox : $unCheckedBox,
            '12' => $request->suratkuasa ? $checkedBox : $unCheckedBox,
        ));

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
