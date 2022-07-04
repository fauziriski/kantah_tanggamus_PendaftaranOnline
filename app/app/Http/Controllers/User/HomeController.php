<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;

class HomeController extends Controller
{
    public function createSuratKuasa()
    {
        return view('user.surat_kuasa.index');
    }

    public function printPdfSuratKuasa(Request $request)
    {

        $today = Carbon::now()->isoFormat('D MMMM Y');
        // dd($today);

        $template = new TemplateProcessor(public_path('word-template/surat-kuasa/surat_kuasa.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        $template->setValues(array(
            "nama" => $request->nama,
            "tempat_lahir" => $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "ktpsimno" => $request->ktpsimno,
            "alamat" => $request->alamat,
            "namakuasa" => $request->namakuasa,
            "tempat_lahirkuasa" => $request->tempat_lahirkuasa,
            "tanggal_lahirkuasa" => $request->tanggal_lahirkuasa,
            "ktpsimnokuasa" => $request->ktpsimnokuasa,
            "alamatkuasa" => $request->alamatkuasa,
            "jalantanah" => $request->jalantanah,
            "kelurahantanah" => $request->kelurahantanah,
            "kecamatantanah" => $request->kecamatantanah,
            "bekasmilikadatno" => $request->bekasmilikadatno,
            "hakmilikno" => $request->hakmilikno,
            "kelurahanhakmilik" => $request->kelurahanhakmilik,
            "hakgunabangunanno" => $request->hakgunabangunanno,
            "kelurahanhakgunabangunan" => $request->kelurahanhakgunabangunan,
            "hakpakaino" => $request->hakpakaino,
            "kelurahanhakpakai" => $request->kelurahanhakpakai,
            "hipotikno" => $request->hipotikno,
            "skhakno" => $request->skhakno,
            "lainnya" => $request->lainnya,
            'date' => $today,
        ));

        $path = 'test/surat-kuasa/';
        $saveDocPath = public_path($path . 'surat_kuasa.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'surat_kuasa.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/surat-kuasa/surat_kuasa.pdf";
        return redirect($file);
    }

    public function createBPHTB()
    {
        return view('user.bphtb.index');
    }

    public function printPdfBPHTB(Request $request)
    {
        $today = Carbon::now()->isoFormat('D MMMM Y');
        // dd($today);

        $template = new TemplateProcessor(public_path('word-template/bphtb/bphtb.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        $template->setValues(array(
            "nama" => $request->nama,
            "pekerjaan" => $request->pekerjaan,
            "alamat" => $request->alamat,
            "nomortanah" => $request->nomortanah,
            "desakelurahan" => $request->desakelurahan,
            "atasdasar" => $request->atasdasar,
            "peralihan" => $request->peralihan,
            "pph" => $request->pph,
            "bilangan" => $request->bilangan,
            "bayarmelalui" => $request->bayarmelalui,
            "tanggalbayar" => $request->tanggalbayar,
            "yangmembuatpernyataan" => $request->yangmembuatpernyataan,
            'date' => $today,
        ));

        $path = 'test/bphtb/';
        $saveDocPath = public_path($path . 'bphtb.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'bphtb.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/bphtb/bphtb.pdf";
        return redirect($file);
    }
}
