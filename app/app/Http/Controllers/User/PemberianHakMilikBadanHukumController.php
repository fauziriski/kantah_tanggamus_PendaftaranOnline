<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;

class PemberianHakMilikBadanHukumController extends Controller
{
    public function index()
    {
        return view('user.pemberian_hak_milik_badan_hukum.index');
    }
    public function create()
    {
        return view('user.pemberian_hak_milik_badan_hukum.form_pendaftaran');
    }


    public function printPdf(Request $request)
    {
        $today = Carbon::now()->isoFormat('D MMMM Y');
        // dd($today);

        $template = new TemplateProcessor(public_path('word-template/pemberian-hak-milik-badan-hukum/formulir_tanah_negara.docx'));

        //style checkbox
        $checkedBox = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unCheckedBox = '<w:sym w:font="Wingdings" w:char="F0A8"/>';


        $template->setValues(array(
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'atasnama' => $request->atasnama,
            'permohonanhak' => $request->permohonanhak,
            'namapemohon' => $request->namapemohon,
            'umur' => $request->umur ? '(' . $request->umur . ')' : '',
            'kewarganegaraandanataukartu' => $request->kewarganegaraandanataukartu,
            'pendudukataupun' => $request->pendudukataupun,
            'darikepaladesacamat' => $request->darikepaladesacamat,
            'pekerjaanjabatan' => $request->pekerjaanjabatan,
            'tempattinggalkedudukan' => $request->tempattinggalkedudukan,
            'hubungankeluargaistri' => $request->hubungankeluargaistri,
            'anak1' => $request->anak1,
            'anak2' => $request->anak2,
            'anak3' => $request->anak3,
            'aktependirian' => $request->aktependirian,
            'letaktanah' => $request->letaktanah,
            'kecamatantanah' => $request->kecamatantanah,
            'kelurahantanah' => $request->kelurahantanah,
            'kotatanah' => $request->kotatanah,
            'luastanah' => $request->luastanah,
            'suratukurtgl' => $request->suratukurtgl,
            'suratukurno' => $request->suratukurno,
            'gambarsituasitgl' => $request->gambarsituasitgl,
            'gambarsituasino' => $request->gambarsituasino,
            'utara' => $request->utara,
            'timur' => $request->timur,
            'selatan' => $request->selatan,
            'barat' => $request->barat,
            'status' => $request->status,
            'hak' => $request->hak,
            'skpt' => $request->skpt,
            'lurahtgl' => $request->lurahtgl,
            'lurahno' => $request->lurahno,
            'jenistanah' => $request->jenistanah,
            'penguasaannya' => $request->penguasaannya,
            'dipergunakanuntuk' => $request->dipergunakanuntuk,
            'haklain' => $request->haklain,
            'luaslain' => $request->luaslain,
            'sertifikattgllain' => $request->sertifikattgllain,
            'sertifikatnolain' => $request->sertifikatnolain,
            'tanahlain2' => $request->tanahlain2,
            'tanahlain3' => $request->tanahlain3,
            'tanahlain4' => $request->tanahlain4,
            'date' => $today,
        ));

        $path = 'test/pemberian-hak-milik-badan-hukum/';
        $saveDocPath = public_path($path . 'formulir_tanah_negara.docx');
        $template->saveAs($saveDocPath);

        //Save it into PDF
        $savePdfPath = public_path($path . 'formulir_tanah_negara.pdf');
        /*@ If already PDF exists then delete it */
        if (file_exists($savePdfPath)) {
            unlink($savePdfPath);
        }

        //convert to PDF
        convertPdf($saveDocPath, $path);

        $file = "./test/pemberian-hak-milik-badan-hukum/formulir_tanah_negara.pdf";
        return redirect($file);
    }
}
