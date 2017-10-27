<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UploadLHSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function indexAuditee() {
        $file = UploadFile::where('status', 1)->get();

        return view('admin.upload.upauditee', compact('file'));
    }

    public function indexAuditor1() {
        $file = UploadFile::where('status', 2)->get();

        return view('admin.upload.upauditorperpo', compact('file'));
    }

    public function indexAuditor2() {
        $file = UploadFile::where('status', 3)->get();

        return view('admin.upload.upauditorpersmt', compact('file'));
    }

    public function storeAuditee() {
        $unit = Input::get('unit_spi');
        $tahun = Input::get('tahun');
        $nama = Input::get('nama');
        $file = Input::file('berkas');

        $rules = array(
            'unit_spi' => 'required',
            'tahun' => 'required',
            'nama' => 'required',
            'berkas' => 'required|max:5000|mimes:doc,docx,pdf,xlsx,xls,ppt,pptx'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return redirect()->route('upAuditee')->withInput()->withErrors($validator);
        }
        else if ($validator->passes()){

            if (Input::file('berkas')->isValid()) {
                $extension = Input::file('berkas')->getClientOriginalExtension();
                $filename = rand(11111,99999).'.'.$extension;

                //$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'data';//its refers proj/public/up_file directry

                $input = new UploadFile();
                $input->unit_spi = $unit;
                $input->tahun = $tahun;
                $input->file_title = $nama;
                $input->file_name = $filename;
                $input->status = 1;
                $input->save();

                $upload_success = $file->storeAs($destinationPath, $filename);
                Session::flash('flash_message', 'Selamat berkas anda berhasil diupload!');

                return redirect()->route('upAuditee');
            }
        }
    }

    public function storeAuditor1() {
        $unit = Input::get('unit_spi');
        $tahun = Input::get('tahun');
        $nama = Input::get('nama');
        $file = Input::file('berkas');

        $rules = array(
            'unit_spi' => 'required',
            'tahun' => 'required',
            'nama' => 'required',
            'berkas' => 'required|max:5000|mimes:doc,docx,pdf,xlsx,xls,ppt,pptx'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return redirect()->route('upAuditor1')->withInput()->withErrors($validator);
        }
        else if ($validator->passes()){

            if (Input::file('berkas')->isValid()) {
                $extension = Input::file('berkas')->getClientOriginalExtension();
                $filename = rand(11111,99999).'.'.$extension;

                //$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'data';//its refers proj/public/up_file directry

                $input = new UploadFile();
                $input->unit_spi = $unit;
                $input->tahun = $tahun;
                $input->file_title = $nama;
                $input->file_name = $filename;
                $input->status = 2;
                $input->save();

                $upload_success = $file->storeAs($destinationPath, $filename);
                Session::flash('flash_message', 'Selamat berkas anda berhasil diupload!');

                return redirect()->route('upAuditor1');
            }
        }
    }

    public function storeAuditor2() {
        $unit = Input::get('unit_spi');
        $smt = Input::get('smt');
        $tahun = Input::get('tahun');
        $nama = Input::get('nama');
        $file = Input::file('berkas');

        $rules = array(
            'unit_spi' => 'required',
            'smt' => 'required',
            'tahun' => 'required',
            'nama' => 'required',
            'berkas' => 'required|max:5000|mimes:doc,docx,pdf,xlsx,xls,ppt,pptx'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return redirect()->route('upAuditor2')->withInput()->withErrors($validator);
        }
        else if ($validator->passes()){

            if (Input::file('berkas')->isValid()) {
                $extension = Input::file('berkas')->getClientOriginalExtension();
                $filename = rand(11111,99999).'.'.$extension;

                //$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'data';//its refers proj/public/up_file directry

                $input = new UploadFile();
                $input->unit_spi = $unit;
                $input->semester = $smt;
                $input->tahun = $tahun;
                $input->file_title = $nama;
                $input->file_name = $filename;
                $input->status = 3;
                $input->save();

                $upload_success = $file->storeAs($destinationPath, $filename);
                Session::flash('flash_message', 'Selamat berkas anda berhasil diupload!');

                return redirect()->route('upAuditor2');
            }
        }
    }
}
