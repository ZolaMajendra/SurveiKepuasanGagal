<?php

namespace App\Http\Controllers;

use App\idauditor;
use App\idauditorsmt;
use App\simpandatapersmt;
use App\skkapersmt10;
use App\skkapersmt11;
use App\skkapersmt12;
use App\skkapersmt13;
use App\skkapersmt14;
use App\skkapersmt15;
use App\skkapersmt16;
use App\skkapersmt2;
use App\skkapersmt3;
use App\skkapersmt4;
use App\skkapersmt5;
use App\skkapersmt6;
use App\skkapersmt7;
use App\skkapersmt8;
use App\skkapersmt9;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContentAuditor2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function skkapersmtstore(Request $request) {
        $user = Auth::user();
        $cek = idauditorsmt::where('user_id', $user->id)->first();

        if (is_null($cek)){
            $this->validate($request, [
                'unit' => 'required',
                'smt' => 'required',
                'tahun' => 'required'
            ]);

            $input = new simpandatapersmt();
            $input->unit = $request->unit;
            $input->semester = $request->smt;
            $input->tahun = $request->tahun;
            $input->user_id = $user->id;
            $input->save();

            $id = simpandatapersmt::where('user_id', '=', $user->id)->first();
            $simpanid = $id->id;

            session()->put('simpanid', $simpanid);

            return redirect()->route('skkapersmt1');
        }
        else {
            Session::flash('flash_message', 'Maaf anda tidak dapat mengisi kuisioner lagi karena anda sudah pernah mengisi kuisioner ini');
            return view('auditor.error');
        }
    }

    public function skkapersmtstore1(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->jenjang_pendidikan = $request->pil1;
        $input->pelatihan_khusus = $request->pil2;
        $input->seminar_diluar_pln = $request->pil3;
        $input->kemampuan_masalah = $request->pil4;
        $input->kemampuan_rekomendasi = $request->pil5;
        $input->kerjasama_tim = $request->pil6;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt2');
    }

    public function skkapersmtstore2(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required',
            'pil7' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->emosional = $request->pil1;
        $input->berarti = $request->pil2;
        $input->bagian = $request->pil3;
        $input->masalah_pln = $request->pil4;
        $input->batas_normal = $request->pil5;
        $input->tinggal_komitmen = $request->pil6;
        $input->loyalitas = $request->pil7;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt3');
    }

    public function skkapersmtstore3(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->luar_biasa_kesuksesan_ai = $request->pil1;
        $input->saya_ai_pln = $request->pil2;
        $input->inspirasi_kerja_terbaik = $request->pil3;
        $input->perkembangan_ai = $request->pil4;
        $input->ai_profesi_terbaik = $request->pil5;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt4');
    }

    public function skkapersmtstore4(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required',
            'pil7' => 'required',
            'pil8' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->maksimal_hasil_terbaik = $request->pil1;
        $input->tugas_tepat_waktu = $request->pil2;
        $input->dekat_ke_atasan = $request->pil3;
        $input->saran_membangun = $request->pil4;
        $input->terbaik_daripada_rekan = $request->pil5;
        $input->evaluasi_selalu_memuaskan = $request->pil6;
        $input->respect_pada_saya = $request->pil7;
        $input->hubungan_baik_auditee = $request->pil8;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt8');
    }

    public function skkapersmtstore5(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->tidak_melanggar_aturan = $request->pil1;
        $input->kesesuaian_tugas = $request->pil2;
        $input->diterima_wajar = $request->pil3;
        $input->tugas_tidak_wajar = $request->pil4;
        $input->sd_cukup = $request->pil5;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt6');
    }

    public function skkapersmtstore6(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required',
            'pil6' => 'required',
            'pil7' => 'required',
            'pil8' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->puas_gaji = $request->pil1;
        $input->suka_pekerjaan = $request->pil2;
        $input->tidak_ingin_pindah = $request->pil3;
        $input->suka_daripada_teman = $request->pil4;
        $input->promosi = $request->pil5;
        $input->puas_penilaian_kinerja_ai = $request->pil6;
        $input->puas_pengelolaan_karir_ai = $request->pil7;
        $input->rotasi_pegawai_ai = $request->pil8;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt7');
    }

    public function skkapersmtstore8(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required',
            'pil5' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->kons1 = $request->pil1;
        $input->kons2 = $request->pil2;
        $input->kons3 = $request->pil3;
        $input->kons4 = $request->pil4;
        $input->kons5 = $request->pil5;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt9');
    }

    public function skkapersmtstore9(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->struct1 = $request->pil1;
        $input->struct2 = $request->pil2;
        $input->struct3 = $request->pil3;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt10');
    }

    public function skkapersmtstore10(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->time1 = $request->pil1;
        $input->time2 = $request->pil2;
        $input->time3 = $request->pil3;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt11');
    }

    public function skkapersmtstore11(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->kinerja1 = $request->pil1;
        $input->kinerja2 = $request->pil2;
        $input->kinerja3 = $request->pil3;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt12');
    }

    public function skkapersmtstore12(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->intent1 = $request->pil1;
        $input->intent2 = $request->pil2;
        $input->intent3 = $request->pil3;
        $input->intent4 = $request->pil4;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt13');
    }

    public function skkapersmtstore13(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->promo1 = $request->pil1;
        $input->promo2 = $request->pil2;
        $input->promo3 = $request->pil3;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt14');
    }

    public function skkapersmtstore14(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->komunikasi1 = $request->pil1;
        $input->komunikasi2 = $request->pil2;
        $input->komunikasi3 = $request->pil3;
        $input->komunikasi4 = $request->pil4;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt15');
    }

    public function skkapersmtstore15(Request $request, $id) {
        $this->validate($request, [
            'pil1' => 'required',
            'pil2' => 'required',
            'pil3' => 'required',
            'pil4' => 'required'
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->cworker1 = $request->pil1;
        $input->cworker2 = $request->pil2;
        $input->cworker3 = $request->pil3;
        $input->cworker4 = $request->pil4;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('skkapersmt7');
    }

    public function skkapersmtstore7(Request $request, $id) {
        $this->validate($request, [
            'keluhan' => 'required',
            'saran' => 'required',
        ]);

        $input = simpandatapersmt::findOrFail($id);
        $input->keluhan = $request->keluhan;
        $input->saran = $request->saran;
        $input->save();

        $temp = simpandatapersmt::findOrFail($id);

        $simpan1 = new idauditorsmt();
        $simpan1->unit = $temp->unit;
        $simpan1->semester = $temp->semester;
        $simpan1->tahun = $temp->tahun;
        $simpan1->user_id = $temp->user_id;
        $simpan1->save();

        $idauditor = idauditorsmt::where('user_id', $temp->user_id)->first();

        $simpan2 = new skkapersmt2();
        $simpan2->jenjang_pendidikan = $temp->jenjang_pendidikan;
        $simpan2->pelatihan_khusus = $temp->pelatihan_khusus;
        $simpan2->seminar_diluar_pln = $temp->seminar_diluar_pln;
        $simpan2->kemampuan_masalah = $temp->kemampuan_masalah;
        $simpan2->kemampuan_rekomendasi = $temp->kemampuan_rekomendasi;
        $simpan2->kerjasama_tim = $temp->kerjasama_tim;
        $simpan2->identitas = $idauditor->id_identitas;
        $simpan2->save();

        $simpan3 = new skkapersmt3();
        $simpan3->emosional = $temp->emosional;
        $simpan3->berarti = $temp->berarti;
        $simpan3->bagian = $temp->bagian;
        $simpan3->masalah_pln = $temp->masalah_pln;
        $simpan3->batas_normal = $temp->batas_normal;
        $simpan3->tinggal_komitmen = $temp->tinggal_komitmen;
        $simpan3->loyalitas = $temp->loyalitas;
        $simpan3->identitas = $idauditor->id_identitas;
        $simpan3->save();

        $simpan4 = new skkapersmt4();
        $simpan4->luar_biasa_kesuksesan_ai = $temp->luar_biasa_kesuksesan_ai;
        $simpan4->saya_ai_pln = $temp->saya_ai_pln;
        $simpan4->inspirasi_kerja_terbaik = $temp->inspirasi_kerja_terbaik;
        $simpan4->perkembangan_ai = $temp->perkembangan_ai;
        $simpan4->ai_profesi_terbaik = $temp->ai_profesi_terbaik;
        $simpan4->identitas = $idauditor->id_identitas;
        $simpan4->save();

        $simpan5 = new skkapersmt5();
        $simpan5->maksimal_hasil_terbaik = $temp->maksimal_hasil_terbaik;
        $simpan5->tugas_tepat_waktu = $temp->tugas_tepat_waktu;
        $simpan5->dekat_ke_atasan = $temp->dekat_ke_atasan;
        $simpan5->saran_membangun = $temp->saran_membangun;
        $simpan5->terbaik_daripada_rekan = $temp->terbaik_daripada_rekan;
        $simpan5->evaluasi_selalu_memuaskan = $temp->evaluasi_selalu_memuaskan;
        $simpan5->respect_pada_saya = $temp->respect_pada_saya;
        $simpan5->hubungan_baik_auditee = $temp->hubungan_baik_auditee;
        $simpan5->identitas = $idauditor->id_identitas;
        $simpan5->save();

        /*$simpan6 = new skkapersmt6();
        $simpan6->tidak_melanggar_aturan = $temp->tidak_melanggar_aturan;
        $simpan6->kesesuaian_tugas = $temp->kesesuaian_tugas;
        $simpan6->diterima_wajar = $temp->diterima_wajar;
        $simpan6->tugas_tidak_wajar = $temp->tugas_tidak_wajar;
        $simpan6->sd_cukup = $temp->sd_cukup;
        $simpan6->identitas = $idauditor->id_identitas;
        $simpan6->save();

        $simpan7 = new skkapersmt7();
        $simpan7->puas_gaji = $temp->puas_gaji;
        $simpan7->suka_pekerjaan = $temp->suka_pekerjaan;
        $simpan7->tidak_ingin_pindah = $temp->tidak_ingin_pindah;
        $simpan7->suka_daripada_teman = $temp->suka_daripada_teman;
        $simpan7->promosi = $temp->promosi;
        $simpan7->puas_penilaian_kinerja_ai = $temp->puas_penilaian_kinerja_ai;
        $simpan7->puas_pengelolaan_karir_ai = $temp->puas_pengelolaan_karir_ai;
        $simpan7->rotasi_pegawai_ai = $temp->rotasi_pegawai_ai;
        $simpan7->identitas = $idauditor->id_identitas;
        $simpan7->save();*/

        $simpan9 = new skkapersmt9();
        $simpan9->pil1 = $temp->kons1;
        $simpan9->pil2 = $temp->kons2;
        $simpan9->pil3 = $temp->kons3;
        $simpan9->pil4 = $temp->kons4;
        $simpan9->pil5 = $temp->kons5;
        $simpan9->identitas = $idauditor->id_identitas;
        $simpan9->save();

        $simpan10 = new skkapersmt10();
        $simpan10->pil1 = $temp->struct1;
        $simpan10->pil2 = $temp->struct2;
        $simpan10->pil3 = $temp->struct3;
        $simpan10->identitas = $idauditor->id_identitas;
        $simpan10->save();

        $simpan11 = new skkapersmt11();
        $simpan11->pil1 = $temp->time1;
        $simpan11->pil2 = $temp->time2;
        $simpan11->pil3 = $temp->time3;
        $simpan11->identitas = $idauditor->id_identitas;
        $simpan11->save();

        $simpan12 = new skkapersmt12();
        $simpan12->pil1 = $temp->kinerja1;
        $simpan12->pil2 = $temp->kinerja2;
        $simpan12->pil3 = $temp->kinerja3;
        $simpan12->identitas = $idauditor->id_identitas;
        $simpan12->save();

        $simpan13 = new skkapersmt13();
        $simpan13->pil1 = $temp->intent1;
        $simpan13->pil2 = $temp->intent2;
        $simpan13->pil3 = $temp->intent3;
        $simpan13->pil4 = $temp->intent4;
        $simpan13->identitas = $idauditor->id_identitas;
        $simpan13->save();

        $simpan14 = new skkapersmt14();
        $simpan14->pil1 = $temp->promo1;
        $simpan14->pil2 = $temp->promo2;
        $simpan14->pil3 = $temp->promo3;
        $simpan14->identitas = $idauditor->id_identitas;
        $simpan14->save();

        $simpan15 = new skkapersmt15();
        $simpan15->pil1 = $temp->komunikasi1;
        $simpan15->pil2 = $temp->komunikasi2;
        $simpan15->pil3 = $temp->komunikasi3;
        $simpan15->pil4 = $temp->komunikasi4;
        $simpan15->identitas = $idauditor->id_identitas;
        $simpan15->save();

        $simpan16 = new skkapersmt16();
        $simpan16->pil1 = $temp->cworker1;
        $simpan16->pil2 = $temp->cworker2;
        $simpan16->pil3 = $temp->cworker3;
        $simpan16->pil4 = $temp->cworker4;
        $simpan16->identitas = $idauditor->id_identitas;
        $simpan16->save();

        $simpan8 = new skkapersmt8();
        $simpan8->keluhan = $temp->keluhan;
        $simpan8->saran = $temp->saran;
        $simpan8->identitas = $idauditor->id_identitas;
        $simpan8->save();

        $simpanid = $idauditor->id_identitas;
        session()->put('simpanid', $simpanid);

        Session::flash('flash_message', 'Selamat data anda berhasil disimpan di database!');
        DB::delete('delete from simpan_persmt where id = ?', [$id]);

        return redirect()->route('skkapersmt');
    }
}
