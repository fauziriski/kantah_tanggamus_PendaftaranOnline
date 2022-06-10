<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class LelangController extends Controller
{
    public function index()
    {
        return view('user.lelang.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {
        $template = new TemplateProcessor(public_path('word-template/lelang/pendaftaran_lelang.docx'));

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

        $path = 'test/lelang/';
        $saveDocPath = public_path($path . 'pendaftaran_lelang.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'pendaftaran_lelang.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/lelang/pendaftaran_lelang.pdf";
        return redirect($file);
    }
}
