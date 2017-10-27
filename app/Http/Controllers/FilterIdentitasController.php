<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\idauditor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FilterIdentitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function idAuditee(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'unit_pln' => 'required'
        ]);

        if ($request->tahun != 0 and $request->unit_pln != 'Semua'){

            $data = DB::table('identitas_auditee')
                ->leftJoin('users', 'identitas_auditee.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->where('unit_pln', $request->unit_pln)
                ->get();

            session()->put('session', $request->tahun);
            session()->put('session2', $request->unit_pln);
            return view('admin.auditee1', compact('data'));
        }
        elseif ($request->unit_pln != 'Semua'){

            $data = DB::table('identitas_auditee')
                ->leftJoin('users', 'identitas_auditee.user_id', '=', 'users.id')
                ->where('unit_pln', $request->unit_pln)
                ->get();

            session()->put('session2', $request->unit_pln);
            return view('admin.auditee1', compact('data'));
        }
        elseif ($request->tahun != 0){

            $data = DB::table('identitas_auditee')
                ->leftJoin('users', 'identitas_auditee.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->get();
            session()->put('session', $request->tahun);
            return view('admin.auditee1', compact('data'));
        }
        else{

            $data = DB::table('identitas_auditee')
                ->leftJoin('users', 'identitas_auditee.user_id', '=', 'users.id')
                ->get();

            return view('admin.auditee1', compact('data'));
        }
    }

    public function idAuditor1(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'unit_pln' => 'required'
        ]);

        if ($request->tahun != 0 and $request->unit_pln != 'Semua'){

            $data = DB::table('identitas')
                ->leftJoin('users', 'identitas.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->where('up_audit', $request->unit_pln)
                ->get();

            session()->put('session', $request->tahun);
            session()->put('session2', $request->unit_pln);
            return view('admin.auditor1_1', compact('data'));
        }
        elseif ($request->unit_pln != 'Semua'){

            $data = DB::table('identitas')
                ->leftJoin('users', 'identitas.user_id', '=', 'users.id')
                ->where('up_audit', $request->unit_pln)
                ->get();

            session()->put('session2', $request->unit_pln);
            return view('admin.auditor1_1', compact('data'));
        }
        elseif ($request->tahun != 0){

            $data = DB::table('identitas')
                ->leftJoin('users', 'identitas.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->get();

            session()->put('session', $request->tahun);
            return view('admin.auditor1_1', compact('data'));
        }
        else {
            $data = DB::table('identitas')
                ->leftJoin('users', 'identitas.user_id', '=', 'users.id')
                ->get();

            return view('admin.auditor1_1', compact('data'));
        }
    }

    public function idAuditor2(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'smt' => 'required'
        ]);

        if ($request->tahun != 0 and $request->smt != 0){

            $data = DB::table('identitaspersmt')
                ->leftJoin('users', 'identitaspersmt.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->where('semester', $request->smt)
                ->get();

            session()->put('session', $request->tahun);
            session()->put('session2', $request->smt);
            return view('admin.auditor2_1', compact('data'));
        }
        elseif ($request->smt != 0){

            $data = DB::table('identitaspersmt')
                ->leftJoin('users', 'identitaspersmt.user_id', '=', 'users.id')
                ->where('semester', $request->smt)
                ->get();

            session()->put('session2', $request->smt);
            return view('admin.auditor2_1', compact('data'));
        }
        elseif ($request->tahun != 0){

            $data = DB::table('identitaspersmt')
                ->leftJoin('users', 'identitaspersmt.user_id', '=', 'users.id')
                ->where('tahun', $request->tahun)
                ->get();

            session()->put('session', $request->tahun);

            return view('admin.auditor2_1', compact('data'));
        }
        else {
            $data = DB::table('identitaspersmt')
                ->leftJoin('users', 'identitaspersmt.user_id', '=', 'users.id')
                ->get();

            return view('admin.auditor2_1', compact('data'));
        }
    }

}
