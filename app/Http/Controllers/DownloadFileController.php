<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function downFilterAuditee(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'unit_spi' => 'required'
        ]);

        if ($request->tahun != 0 and $request->unit_spi != 'Semua'){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('unit_spi', $request->unit_spi)
                ->where('status', 1)->get();
            session()->put('session', $request->tahun);
            session()->put('session2', $request->unit_spi);
            return view('auditorplus.auditee', compact('file'));
        }
        elseif ($request->unit_spi != 'Semua'){
            $file = UploadFile::where('unit_spi', $request->unit_spi)
                ->where('status', 1)->get();
            session()->put('session2', $request->unit_spi);
            return view('auditorplus.auditee', compact('file'));
        }
        elseif ($request->tahun != 0){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('status', 1)->get();
            session()->put('session', $request->tahun);
            return view('auditorplus.auditee', compact('file'));
        }

        $file = UploadFile::where('status', 1)->get();

        return view('auditorplus.auditee', compact('file'));
    }

    public function downloadFuncAuditee() {
        $file = UploadFile::where('status', 1)->get();

        return view('auditorplus.auditee', compact('file'));
    }

    public function downFilterAuditor1(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'unit_spi' => 'required'
        ]);

        if ($request->tahun != 0 and $request->unit_spi != 'Semua'){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('unit_spi', $request->unit_spi)
                ->where('status', 2)->get();
            session()->put('session', $request->tahun);
            session()->put('session2', $request->unit_spi);
            return view('auditorplus.auditorperpo', compact('file'));
        }
        elseif ($request->unit_spi != 'Semua'){
            $file = UploadFile::where('unit_spi', $request->unit_spi)
                ->where('status', 2)->get();
            session()->put('session2', $request->unit_spi);
            return view('auditorplus.auditorperpo', compact('file'));
        }
        elseif ($request->tahun != 0){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('status', 2)->get();
            session()->put('session', $request->tahun);
            return view('auditorplus.auditorperpo', compact('file'));
        }

        $file = UploadFile::where('status', 2)->get();

        return view('auditorplus.auditorperpo', compact('file'));
    }

    public function downloadFuncAuditor1() {
        $file = UploadFile::where('status', 2)->get();

        return view('auditorplus.auditorperpo', compact('file'));
    }

    public function downFilterAuditor2(Request $request) {
        $this->validate($request, [
            'tahun' => 'required',
            'smt' => 'required'
        ]);

        if ($request->tahun != 0 and $request->smt != 0){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('semester', $request->smt)
                ->where('status', 3)->get();
            session()->put('session', $request->tahun);
            session()->put('session2', $request->smt);
            return view('auditorplus.auditorpersmt', compact('file'));
        }
        elseif ($request->smt != 0){
            $file = UploadFile::where('semester', $request->smt)
                ->where('status', 3)->get();
            session()->put('session2', $request->smt);
            return view('auditorplus.auditorpersmt', compact('file'));
        }
        elseif ($request->tahun != 0){
            $file = UploadFile::where('tahun', $request->tahun)
                ->where('status', 3)->get();
            session()->put('session', $request->tahun);
            return view('auditorplus.auditorpersmt', compact('file'));
        }

        $file = UploadFile::where('status', 3)->get();

        return view('auditorplus.auditorpersmt', compact('file'));
    }

    public function downloadFuncAuditor2() {
        $file = UploadFile::where('status', 3)->get();

        return view('auditorplus.auditorpersmt', compact('file'));
    }
}
