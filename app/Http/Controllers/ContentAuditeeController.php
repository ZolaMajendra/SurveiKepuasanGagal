<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\auditee2;
use App\auditee3;
use App\auditee4;
use App\auditee5;
use App\auditee6;
use App\auditee7;
use App\simpandataauditee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContentAuditeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storesurvey1(Request $request) {
        $user = Auth::user();
        $cek = auditee1::where('user_id', $user->id)->first();
        if(is_null($cek)){
            $this->validate($request, [
                'unit_pln' => 'required',
                'tahun' => 'required'
            ]);

            $input = new simpandataauditee();
            $input->unit_pln = $request->unit_pln;
            $input->tahun = $request->tahun;
            $input->user_id = $user->id;
            $input->save();

            $id = simpandataauditee::where('user_id', '=', $user->id)->first();
            $simpanid = $id->id;
            session()->put('simpanid', $simpanid);

            return redirect()->route('survey2');
        }
        else {
            Session::flash('flash_message', 'Maaf anda tidak dapat mengisi kuisioner lagi karena anda sudah pernah mengisi kuisioner ini');
            return view('auditee.error');
        }
    }

    public function storesurvey2(Request $request, $id) {
        $this->validate($request, [
            'kategori1a' => 'required',
            'kategori1b' => 'required',
            'kategori1c' => 'required',
            'kategori1d' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->kategori1a = $request->kategori1a;
        $input->kategori1b = $request->kategori1b;
        $input->kategori1c = $request->kategori1c;
        $input->kategori1d = $request->kategori1d;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->route('survey3');
    }

    public function storesurvey3(Request $request, $id) {
        $this->validate($request, [
            'kategori2a' => 'required',
            'kategori2b' => 'required',
            'kategori2c' => 'required',
            'kategori2d' => 'required',
            'kategori2e' => 'required',
            'kategori2f' => 'required',
            'kategori2g' => 'required',
            'kategori2h' => 'required',
            'kategori2i' => 'required',
            'kategori2j' => 'required',
            'kategori2k' => 'required',
            'kategori2l' => 'required',
            'kategori2m' => 'required',
            'kategori2n' => 'required',
            'kategori2o' => 'required',
            'kategori2p' => 'required',
            'kategori2q' => 'required',
            'kategori2r' => 'required',
            'kategori2s' => 'required',
            'kategori2t' => 'required',
            'kategori2u' => 'required',
            'kategori2v' => 'required',
            'kategori2w' => 'required',
            'kategori2x' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->kategori2a = $request->kategori2a;
        $input->kategori2b = $request->kategori2b;
        $input->kategori2c = $request->kategori2c;
        $input->kategori2d = $request->kategori2d;
        $input->kategori2e = $request->kategori2e;
        $input->kategori2f = $request->kategori2f;
        $input->kategori2g = $request->kategori2g;
        $input->kategori2h = $request->kategori2h;
        $input->kategori2i = $request->kategori2i;
        $input->kategori2j = $request->kategori2j;
        $input->kategori2k = $request->kategori2k;
        $input->kategori2l = $request->kategori2l;
        $input->kategori2m = $request->kategori2m;
        $input->kategori2n = $request->kategori2n;
        $input->kategori2o = $request->kategori2o;
        $input->kategori2p = $request->kategori2p;
        $input->kategori2q = $request->kategori2q;
        $input->kategori2r = $request->kategori2r;
        $input->kategori2s = $request->kategori2s;
        $input->kategori2t = $request->kategori2t;
        $input->kategori2u = $request->kategori2u;
        $input->kategori2v = $request->kategori2v;
        $input->kategori2w = $request->kategori2w;
        $input->kategori2x = $request->kategori2x;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->intended(route('survey4'));
    }

    public function storesurvey4(Request $request, $id) {
        $this->validate($request, [
            'kategori3a' => 'required',
            'kategori3b' => 'required',
            'kategori3c' => 'required',
            'kategori3d' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->kategori3a = $request->kategori3a;
        $input->kategori3b = $request->kategori3b;
        $input->kategori3c = $request->kategori3c;
        $input->kategori3d = $request->kategori3d;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->intended(route('survey5'));
    }

    public function storesurvey5(Request $request, $id) {
        $this->validate($request, [
            'kategori4a' => 'required',
            'kategori4b' => 'required',
            'kategori4c' => 'required',
            'kategori4d' => 'required',
            'kategori4e' => 'required',
            'kategori4f' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->kategori4a = $request->kategori4a;
        $input->kategori4b = $request->kategori4b;
        $input->kategori4c = $request->kategori4c;
        $input->kategori4d = $request->kategori4d;
        $input->kategori4e = $request->kategori4e;
        $input->kategori4f = $request->kategori4f;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->intended(route('survey6'));
    }

    public function storesurvey6(Request $request, $id) {
        $this->validate($request, [
            'kategori5a' => 'required',
            'kategori5b' => 'required',
            'kategori5c' => 'required',
            'kategori5d' => 'required',
            'kategori5e' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->kategori5a = $request->kategori5a;
        $input->kategori5b = $request->kategori5b;
        $input->kategori5c = $request->kategori5c;
        $input->kategori5d = $request->kategori5d;
        $input->kategori5e = $request->kategori5e;
        $input->save();

        $simpanid = $id;
        session()->put('simpanid', $simpanid);

        return redirect()->intended(route('survey7'));
    }

    public function storesurvey7(Request $request, $id) {
        $this->validate($request, [
            'nilaia' => 'required',
            'nilaib' => 'required',
            'nilaic' => 'required'
        ]);

        $input = simpandataauditee::findOrFail($id);
        $input->nilaia = $request->nilaia;
        $input->nilaib = $request->nilaib;
        $input->nilaic = $request->nilaic;
        $input->save();

        $temp = simpandataauditee::findOrFail($id);

        $simpan1 = new auditee1();
        $simpan1->unit_pln = $temp->unit_pln;
        $simpan1->tahun = $temp->tahun;
        $simpan1->user_id = $temp->user_id;
        $simpan1->save();

        $idauditee = auditee1::where('user_id', $temp->user_id)->first();

        $simpan2 = new auditee2();
        $simpan2->kategori1a = $temp->kategori1a;
        $simpan2->kategori1b = $temp->kategori1b;
        $simpan2->kategori1c = $temp->kategori1c;
        $simpan2->kategori1d = $temp->kategori1d;
        $simpan2->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan2->save();

        $simpan3 = new auditee3();
        $simpan3->kategori2a = $temp->kategori2a;
        $simpan3->kategori2b = $temp->kategori2b;
        $simpan3->kategori2c = $temp->kategori2c;
        $simpan3->kategori2d = $temp->kategori2d;
        $simpan3->kategori2e = $temp->kategori2e;
        $simpan3->kategori2f = $temp->kategori2f;
        $simpan3->kategori2g = $temp->kategori2g;
        $simpan3->kategori2h = $temp->kategori2h;
        $simpan3->kategori2i = $temp->kategori2i;
        $simpan3->kategori2j = $temp->kategori2j;
        $simpan3->kategori2k = $temp->kategori2k;
        $simpan3->kategori2l = $temp->kategori2l;
        $simpan3->kategori2m = $temp->kategori2m;
        $simpan3->kategori2n = $temp->kategori2n;
        $simpan3->kategori2o = $temp->kategori2o;
        $simpan3->kategori2p = $temp->kategori2p;
        $simpan3->kategori2q = $temp->kategori2q;
        $simpan3->kategori2r = $temp->kategori2r;
        $simpan3->kategori2s = $temp->kategori2s;
        $simpan3->kategori2t = $temp->kategori2t;
        $simpan3->kategori2u = $temp->kategori2u;
        $simpan3->kategori2v = $temp->kategori2v;
        $simpan3->kategori2w = $temp->kategori2w;
        $simpan3->kategori2x = $temp->kategori2x;
        $simpan3->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan3->save();

        $simpan4 = new auditee4();
        $simpan4->kategori3a = $temp->kategori3a;
        $simpan4->kategori3b = $temp->kategori3b;
        $simpan4->kategori3c = $temp->kategori3c;
        $simpan4->kategori3d = $temp->kategori3d;
        $simpan4->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan4->save();

        $simpan5 = new auditee5();
        $simpan5->kategori4a = $temp->kategori4a;
        $simpan5->kategori4b = $temp->kategori4b;
        $simpan5->kategori4c = $temp->kategori4c;
        $simpan5->kategori4d = $temp->kategori4d;
        $simpan5->kategori4e = $temp->kategori4e;
        $simpan5->kategori4f = $temp->kategori4f;
        $simpan5->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan5->save();

        $simpan6 = new auditee6();
        $simpan6->kategori5a = $temp->kategori5a;
        $simpan6->kategori5b = $temp->kategori5b;
        $simpan6->kategori5c = $temp->kategori5c;
        $simpan6->kategori5d = $temp->kategori5d;
        $simpan6->kategori5e = $temp->kategori5e;
        $simpan6->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan6->save();

        $simpan7 = new auditee7();
        $simpan7->nilaia = $temp->nilaia;
        $simpan7->nilaib = $temp->nilaib;
        $simpan7->nilaic = $temp->nilaic;
        $simpan7->identitas_auditee = $idauditee->id_identitas_auditee;
        $simpan7->save();

        Session::flash('flash_message', 'Selamat data anda berhasil disimpan di database!');
        DB::delete('delete from simpan_auditee where id = ?', [$id]);

        return redirect()->intended(route('auditee'));
    }
}
