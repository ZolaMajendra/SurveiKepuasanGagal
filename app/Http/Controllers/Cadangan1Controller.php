<?php

namespace App\Http\Controllers;

use App\idauditor;
use App\simpandataperpo;
use App\skkaperpo2;
use App\skkaperpo3;
use App\skkaperpo4;
use App\skkaperpo5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Cadangan1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function skkaperpostore(Request $request) {
        $user = Auth::user();
        $cek = idauditor::where('user_id', $user->id)->first();

        if (is_null($cek)){
            $this->validate($request, [
                'unit' => 'required',
                'up_audit' => 'required',
                'tahun' => 'required'
            ]);

            $input = new simpandataperpo();
            $input->user_id = $user->id;
            $input->unit = $request->unit;
            $input->up_audit = $request->up_audit;
            $input->tahun = $request->tahun;
            $input->save();

            $id = simpandataperpo::where('user_id', '=', $user->id)->first();
            $simpanid = $id->id;

            session()->put('simpanid', $simpanid);

            return redirect()->route('skkaperpo1');
        }
        else {
            Session::flash('flash_message', 'Maaf anda tidak dapat mengisi kuisioner lagi karena anda sudah pernah mengisi kuisioner ini');
            return view('auditor.error');
        }
    }

    public function skkaperpostore1(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required',
            'pil7' => 'required',
            'pil8' => 'required',
            'pil9' => 'required',
            'pil10' => 'required',
            'pil11' => 'required',
            'isi1' => 'required',
            'isi2' => 'required',
            'isi3' => 'required',
            'isi4' => 'required',
            'isi5' => 'required',
            'isi6' => 'required',
            'isi7' => 'required'
        ]);

        $input = simpandataperpo::findOrFail($id);
        $input->erbas_sblm_audit_pilihan = $request->pil1;
        $input->erbas_sblm_audit_isian = $request->isi1;
        $input->minta_data_sblm_audit_pilihan = $request->pil2;
        $input->minta_data_sblm_audit_isian = $request->isi2;
        $input->mslh_uang_sblm_audit_pilihan = $request->pil3;
        $input->mslh_uang_sblm_audit_isian = $request->isi3;
        $input->sppd_sblm_audit_pilihan = $request->pil4;
        $input->pembagian_ruang_lingkup_sblm_audit_pilihan = $request->pil5;
        $input->pembagian_ruang_lingkup_sblm_audit_isian = $request->isi4;
        $input->penentuan_kriteria_sblm_audit_pilihan = $request->pil6;
        $input->penentuan_kriteria_sblm_audit_isian = $request->isi5;
        $input->ruang_lingkup_terbebani_sblm_audit_pilihan = $request->pil7;
        $input->ruang_lingkup_terbebani_sblm_audit_isian = $request->isi6;
        $input->ruang_lingkup_spesifik_sblm_audit = $request->pil8;
        $input->profile_risk_sblm_audit = $request->pil9;
        $input->knowledge_sharing = $request->pil10;
        $input->apqc_pilihan = $request->pil11;
        $input->apqc_isian = $request->isi7;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkaperpo2');
    }

    public function skkaperpostore2(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required',
            'pil7' => 'required',
            'pil8' => 'required',
            'pil9' => 'required',
            'pil10' => 'required',
            'pil11' => 'required',
            'isi1' => 'required',
            'isi2' => 'required',
            'isi3' => 'required',
            'isi4' => 'required',
            'isi5' => 'required',
            'isi6' => 'required'
        ]);

        $input = simpandataperpo::findOrFail($id);
        $input->sarana_selama_audit_pilihan = $request->pil1;
        $input->sarana_selama_audit_isian = $request->isi1;
        $input->minta_data_selama_audit_pilihan = $request->pil2;
        $input->minta_data_selama_audit_isian = $request->isi2;
        $input->kelengkapan_data_selama_audit_pilihan = $request->pil3;
        $input->profile_risk_selama_audit_pilihan = $request->pil4;
        $input->erbas_selama_audit_pilihan = $request->pil5;
        $input->erbas_selama_audit_isian = $request->isi3;
        $input->uji_petik_pilihan = $request->pil6;
        $input->uji_petik_isian = $request->isi4;
        $input->kooperatif_selama_audit_pilihan = $request->pil7;
        $input->kooperatif_selama_audit_isian = $request->isi5;
        $input->jumlah_sdm = $request->pil8;
        $input->kemampuan_sdm = $request->pil9;
        $input->hotel_pilihan = $request->pil10;
        $input->hotel_isian = $request->isi6;
        $input->sulit_ditemui_selam_audit_pilihan = $request->pil11;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkaperpo3');
    }

    public function skkaperpostore3(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'isi1' => 'required'
        ]);

        $input = simpandataperpo::findOrFail($id);
        $input->erbas_setelah_audit_pilihan = $request->pil1;
        $input->erbas_setelah_audit_isian = $request->isi1;
        $input->rekomendasi = $request->pil2;
        $input->evidence = $request->pil3;
        $input->sppd_setelah_audit = $request->pil4;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkaperpo4');
    }

    public function skkaperpostore4(Request $request, $id) {
        $this->validate($request, [
            'keluhan' => 'required',
            'saran' => 'required',
        ]);

        $input = simpandataperpo::findOrFail($id);
        $input->keluhan = $request->keluhan;
        $input->saran = $request->saran;
        $input->save();

        $user = Auth::user();
        $temp = simpandataperpo::findOrFail($id);

        $simpan1 = new idauditor();
        $simpan1->jenis_kelamin = $temp->jenis_kelamin;
        $simpan1->jabatan_terakhir = $temp->jabatan_terakhir;
        $simpan1->pengalaman_kerja = $temp->pengalaman_kerja;
        $simpan1->unit = $temp->unit;
        $simpan1->up_audit = $temp->up_audit;
        $simpan1->tahun = $temp->tahun;
        $simpan1->user_id = $user->id;
        $simpan1->save();

        $idauditor = idauditor::where('user_id', $user->id)->first();

        $simpan2 = new skkaperpo2();
        $simpan2->erbas_sblm_audit_pilihan = $temp->erbas_sblm_audit_pilihan;
        $simpan2->erbas_sblm_audit_isian = $temp->erbas_sblm_audit_isian;
        $simpan2->minta_data_sblm_audit_pilihan = $temp->minta_data_sblm_audit_pilihan;
        $simpan2->minta_data_sblm_audit_isian = $temp->minta_data_sblm_audit_isian;
        $simpan2->mslh_uang_sblm_audit_pilihan = $temp->mslh_uang_sblm_audit_pilihan;
        $simpan2->mslh_uang_sblm_audit_isian = $temp->mslh_uang_sblm_audit_isian;
        $simpan2->sppd_sblm_audit_pilihan = $temp->sppd_sblm_audit_pilihan;
        $simpan2->pembagian_ruang_lingkup_sblm_audit_pilihan = $temp->pembagian_ruang_lingkup_sblm_audit_pilihan;
        $simpan2->pembagian_ruang_lingkup_sblm_audit_isian = $temp->pembagian_ruang_lingkup_sblm_audit_isian;
        $simpan2->penentuan_kriteria_sblm_audit_pilihan = $temp->penentuan_kriteria_sblm_audit_pilihan;
        $simpan2->penentuan_kriteria_sblm_audit_isian = $temp->penentuan_kriteria_sblm_audit_isian;
        $simpan2->ruang_lingkup_terbebani_sblm_audit_pilihan = $temp->ruang_lingkup_terbebani_sblm_audit_pilihan;
        $simpan2->ruang_lingkup_terbebani_sblm_audit_isian = $temp->ruang_lingkup_terbebani_sblm_audit_isian;
        $simpan2->ruang_lingkup_spesifik_sblm_audit = $temp->ruang_lingkup_spesifik_sblm_audit;
        $simpan2->profile_risk_sblm_audit = $temp->profile_risk_sblm_audit;
        $simpan2->knowledge_sharing = $temp->knowledge_sharing;
        $simpan2->apqc_pilihan = $temp->apqc_pilihan;
        $simpan2->apqc_isian = $temp->apqc_isian;
        $simpan2->identitas = $idauditor->id_identitas;
        $simpan2->save();

        $simpan3 = new skkaperpo3();
        $simpan3->sarana_selama_audit_pilihan = $temp->sarana_selama_audit_pilihan;
        $simpan3->sarana_selama_audit_isian = $temp->sarana_selama_audit_isian;
        $simpan3->minta_data_selama_audit_pilihan = $temp->minta_data_selama_audit_pilihan;
        $simpan3->minta_data_selama_audit_isian = $temp->minta_data_selama_audit_isian;
        $simpan3->kelengkapan_data_selama_audit_pilihan = $temp->kelengkapan_data_selama_audit_pilihan;
        $simpan3->profile_risk_selama_audit_pilihan = $temp->profile_risk_selama_audit_pilihan;
        $simpan3->erbas_selama_audit_pilihan = $temp->erbas_selama_audit_pilihan;
        $simpan3->erbas_selama_audit_isian = $temp->erbas_selama_audit_isian;
        $simpan3->uji_petik_pilihan = $temp->uji_petik_pilihan;
        $simpan3->uji_petik_isian = $temp->uji_petik_isian;
        $simpan3->kooperatif_selama_audit_pilihan = $temp->kooperatif_selama_audit_pilihan;
        $simpan3->kooperatif_selama_audit_isian = $temp->kooperatif_selama_audit_isian;
        $simpan3->jumlah_sdm = $temp->jumlah_sdm;
        $simpan3->kemampuan_sdm = $temp->kemampuan_sdm;
        $simpan3->hotel_pilihan = $temp->hotel_pilihan;
        $simpan3->hotel_isian = $temp->hotel_isian;
        $simpan3->sulit_ditemui_selam_audit_pilihan = $temp->sulit_ditemui_selam_audit_pilihan;
        $simpan3->identitas = $idauditor->id_identitas;
        $simpan3->save();

        $simpan4 = new skkaperpo4();
        $simpan4->erbas_setelah_audit_pilihan = $temp->erbas_setelah_audit_pilihan;
        $simpan4->erbas_setelah_audit_isian = $temp->erbas_setelah_audit_isian;
        $simpan4->rekomendasi = $temp->rekomendasi;
        $simpan4->evidence = $temp->evidence;
        $simpan4->sppd_setelah_audit = $temp->sppd_setelah_audit;
        $simpan4->identitas = $idauditor->id_identitas;
        $simpan4->save();

        $simpan5 = new skkaperpo5();
        $simpan5->keluhan = $temp->keluhan;
        $simpan5->saran = $temp->saran;
        $simpan5->identitas = $idauditor->id_identitas;
        $simpan5->save();

        $simpanid = $idauditor->id_identitas;
        session()->put('simpanid', $simpanid);

        Session::flash('flash_message', 'Selamat data anda berhasil disimpan di database!');
        DB::delete('delete from simpan_perpo where id = ?', [$id]);

        return redirect()->route('skkaperpo');
    }
}
