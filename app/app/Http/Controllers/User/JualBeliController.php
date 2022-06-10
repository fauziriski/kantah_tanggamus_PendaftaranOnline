<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use Illuminate\Support\Facades\Http;

use App\Helper\Helper;

use PDF;
use File;

class JualBeliController extends Controller
{

    public function index()
    {
        return view('user.jual_beli.index');
    }

    public function create()
    {
        return view('user.jual_beli.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {
        /* Set the PDF Engine Renderer Path */
        // $domPdfPath = base_path('vendor/dompdf/dompdf');
        // Settings::setPdfRendererPath(base_path('vendor/tecnickcom/tcpdf'));
        // Settings::setPdfRendererName('TCPDF');

        /*@ Reading doc file */
        $template = new TemplateProcessor(public_path('word-template/jual-beli/pendaftaran_peralihan_hak_jual_beli_test.docx'));

        /*@ Replacing variables in doc file */
        // $template->setValue('id', 2);
        $template->setValue('nama', $request->nama);
        $template->setValue('pekerjaan', $request->pekerjaan);
        $template->setValue('noktpsim', $request->noktpsim);
        $template->setValue('notelphp', $request->notelphp);
        $template->setValue('alamat', $request->alamat);
        $template->setValue('rt', $request->rt);
        $template->setValue('rw', $request->rw);
        $template->setValue('no', $request->no);
        $template->setValue('kecamatan', $request->kecamatan);
        $template->setValue('kelurahan', $request->kelurahan);
        $template->setValue('atasnama', $request->atasnama);
        $template->setValue('nohakmilik', $request->nohakmilik);
        $template->setValue('kelurahanhakmilik', $request->kelurahanhakmilik);
        $template->setValue('hakgunabangunan', $request->hakgunabangunan);
        $template->setValue('kelurahanhakgunabangunan', $request->kelurahanhakgunabangunan);
        $template->setValue('hakpakai', $request->hakpakai);
        $template->setValue('kelurahanhakpakai', $request->kelurahanhakpakai);
        $template->setValue('jalan', $request->jalan);
        $template->setValue('rtt', $request->rttanah);
        $template->setValue('rwt', $request->rwtanah);
        $template->setValue('not', $request->nomoralamattanah);
        $template->setValue('kecamatantanah', $request->kecamatantanah);
        $template->setValue('kelurahantanah', $request->kelurahantanah);
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';
        if ($request->fotocopyktppemohon) {
            $template->setValue('1', $checkedBox);
        } else {
            $template->setValue('1', $unCheckedBox);
        }

        if ($request->fotocopyktppenjual) {
            $template->setValue('2', $checkedBox);
        } else {
            $template->setValue('2', $unCheckedBox);
        }

        if ($request->fotocopysuratnikah) {
            $template->setValue('3', $checkedBox);
        } else {
            $template->setValue('3', $unCheckedBox);
        }

        if ($request->sk59) {
            $template->setValue('4', $checkedBox);
        } else {
            $template->setValue('4', $unCheckedBox);
        }

        if ($request->aktajualbeli) {
            $template->setValue('5', $checkedBox);
        } else {
            $template->setValue('5', $unCheckedBox);
        }

        if ($request->aktahibah) {
            $template->setValue('6', $checkedBox);
        } else {
            $template->setValue('6', $unCheckedBox);
        }

        if ($request->pbbtahunberjalan) {
            $template->setValue('7', $checkedBox);
        } else {
            $template->setValue('7', $unCheckedBox);
        }

        if ($request->suratnotaris) {
            $template->setValue('8', $checkedBox);
        } else {
            $template->setValue('8', $unCheckedBox);
        }

        if ($request->fotocopysbb) {
            $template->setValue('9', $checkedBox);
        } else {
            $template->setValue('9', $unCheckedBox);
        }
        if ($request->suratketeranganwaris) {
            $template->setValue('10', $checkedBox);
        } else {
            $template->setValue('10', $unCheckedBox);
        }
        if ($request->aktapembagianhakbersama) {
            $template->setValue('11', $checkedBox);
        } else {
            $template->setValue('11', $unCheckedBox);
        }
        if ($request->suratkuasa) {
            $template->setValue('12', $checkedBox);
        } else {
            $template->setValue('12', $unCheckedBox);
        }

        /*@ Save Temporary Word File With New Name */
        $path = 'test/jual-beli/';
        $saveDocPath = public_path($path . 'result.docx');
        $template->saveAs($saveDocPath);



        // $phpWord = new \PhpOffice\PhpWord\PhpWord();

        // $document = $phpWord->loadTemplate($saveDocPath);
        // $document->saveAs($saveDocPath);
        // // return response()->download('./test/new-result.docx');

        // // Load temporarily create word file
        // $content = IOFactory::load($saveDocPath);
        // dd($content);

        //Save it into PDF
        $savePdfPath = public_path($path . 'result.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        // //Save it into PDF
        // $PDFWriter = IOFactory::createWriter($content, 'PDF');
        // $PDFWriter->save($savePdfPath);
        // // echo 'File has been successfully converted';

        /*@ Remove temporarily created word file */
        // if (file_exists($saveDocPath)) {
        //     unlink($saveDocPath);
        // }
        $file = "./test/jual-beli/result.pdf";
        return redirect($file);
    }
}
