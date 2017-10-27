<?php

namespace App\Http\Controllers;

use App\idauditor;
use App\simpandataperpo;
use App\skkaperponew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContentAuditor1Controller extends Controller
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

            return redirect()->route('skkaperpopt');
        }
        else {
            Session::flash('flash_message', 'Maaf anda tidak dapat mengisi kuisioner lagi karena anda sudah pernah mengisi kuisioner ini');
            return view('auditor.error');
        }
    }

    public function skkaperponewstore(Request $request, $id){
        $this->validate($request, [
            'soal1' => 'required',
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required'
        ]);

        $input = simpandataperpo::findOrFail($id);
        $input->soal1 = $request->soal1;
        $input->soal2 = $request->soal2;
        $input->soal3 = $request->soal3;
        $input->soal4 = $request->soal4;
        $input->save();

        $user = Auth::user();
        $temp = simpandataperpo::findOrFail($id);

        $simpan1 = new idauditor();
        $simpan1->unit = $temp->unit;
        $simpan1->up_audit = $temp->up_audit;
        $simpan1->tahun = $temp->tahun;
        $simpan1->user_id = $user->id;
        $simpan1->save();

        $idauditor = idauditor::where('user_id', $user->id)->first();

        $simpan2 = new skkaperponew();
        $simpan2->soal1 = $temp->soal1;
        $simpan2->soal2 = $temp->soal2;
        $simpan2->soal3 = $temp->soal3;
        $simpan2->soal4 = $temp->soal4;
        $simpan2->identitas = $idauditor->id_identitas;
        $simpan2->save();

        $simpanid = $idauditor->id_identitas;
        session()->put('simpanid', $simpanid);

        Session::flash('flash_message', 'Selamat data anda berhasil disimpan di database!');
        DB::delete('delete from simpan_perpo_new where id = ?', [$id]);

        return redirect()->route('skkaperpo');
    }
}
