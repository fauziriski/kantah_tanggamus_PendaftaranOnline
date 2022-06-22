<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class KonversiController extends Controller
{
    public function index()
    {
        return view('user.konversi.index');
    }

    public function create()
    {
        return view('user.konversi.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {
        // dd($request);

        $template = new TemplateProcessor(public_path('word-template/konversi/formulir_tanah_milik_adat.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';


        $template->setValues(array(
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'noktp' => $request->noktp,
            'alamat' => $request->alamat,
            'namakuasa' => $request->namakuasa,
            'umurkuasa' => $request->umurkuasa,
            'pekerjaankuasa' => $request->pekerjaankuasa,
            'noktpkuasa' => $request->noktpkuasa,
            'alamatkuasa' => $request->alamatkuasa,
            'suratkuasanomor' => $request->suratkuasanomor,
            'tanggalsuratkuasa' => $request->tanggalsuratkuasa,
            'terletakdi' => $request->terletakdi,
            'kecamatantanah' => $request->kecamatantanah,
            'kelurahantanah' => $request->kelurahantanah,
            'kotaadministrasi' => $request->kotaadministrasi,
            'girikcno' => $request->girikcno,
            'vino' => $request->vino,
            'luastanah' => $request->luastanah,
            'lampiran1' => $request->lampiran1,
            'lampiran2' => $request->lampiran2,
            'lampiran3' => $request->lampiran3,
            'lampiran4' => $request->lampiran4,
            'lampiran5' => $request->lampiran5,
        ));

        $path = 'test/konversi/';
        $saveDocPath = public_path($path . 'formulir_tanah_milik_adat.docx.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'formulir_tanah_milik_adat.docx.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/konversi/formulir_tanah_milik_adat.docx.pdf";
        return redirect($file);
    }
}
