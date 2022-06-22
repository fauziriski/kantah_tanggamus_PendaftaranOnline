<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class PenggabunganController extends Controller
{

    public function index()
    {
        return view('user.penggabungan.index');
    }

    public function create()
    {
        return view('user.penggabungan.form_pendaftaran');
    }

    public function printPdf(Request $request)
    {
        // dd($request);

        $template = new TemplateProcessor(public_path('word-template/penggabungan/pendaftaran_penggabungan.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';


        $template->setValues(array(
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'notelphp' => $request->notelphp,
            'namakuasa' => $request->namakuasa,
            'pekerjaankuasa' => $request->pekerjaankuasa,
            'alamatkuasa' => $request->alamatkuasa,
            'notelphpkuasa' => $request->notelphpkuasa,
            'suratkuasatgl' => $request->suratkuasatgl,
            'nomorsuratkuasa' => $request->nomorsuratkuasa,
            'hakgunabagunanno' => $request->hakgunabagunanno,
            'hakgunabagunanno2' => $request->hakgunabagunanno2,
            'menjadi' => $request->menjadi,
            'menjadi2' => $request->menjadi2,
            'untukkeperluan' => $request->untukkeperluan,
            'jalantanah' => $request->jalantanah,
            'rttanah' => $request->rttanah,
            'rwtanah' => $request->rwtanah,
            'notanah' => $request->norumahtanah,
            'kecamatantanah' => $request->kecamatantanah,
            'kelurahantanah' => $request->kelurahantanah,
            'sertipikatno' => $request->sertipikatno,
            'sertipikatno2' => $request->sertipikatno2,
            'pemisahandanpenggabungantgl' => $request->pemisahandanpenggabungantgl,
            'suratukurno' => $request->suratukurno,
            'suratukurtgl' => $request->suratukurtgl,
            'ktpno' => $request->ktpno,
            'aktajualbelino' => $request->aktajualbelino,
            'aktajualbelitgl' => $request->aktajualbelitgl,
        ));

        $path = 'test/penggabungan/';
        $saveDocPath = public_path($path . 'pendaftaran_penggabungan.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'pendaftaran_penggabungan.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/penggabungan/pendaftaran_penggabungan.pdf";
        return redirect($file);
    }
}
