<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\auditee2;
use App\auditee3;
use App\auditee4;
use App\auditee5;
use App\auditee6;
use App\auditee7;
use App\idauditor;
use App\idauditorsmt;
use App\skkaperpo2;
use App\skkaperpo3;
use App\skkaperpo4;
use App\skkaperpo5;
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
use App\User;
use Illuminate\Http\Request;

class IdentitasShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAuditee($id) {
        $data1 = auditee1::where('id_identitas_auditee', $id)->first();
        $data2 = auditee2::where('identitas_auditee', $id)->first();
        $data3 = auditee3::where('identitas_auditee', $id)->first();
        $data4 = auditee4::where('identitas_auditee', $id)->first();
        $data5 = auditee5::where('identitas_auditee', $id)->first();
        $data6 = auditee6::where('identitas_auditee', $id)->first();
        $data7 = auditee7::where('identitas_auditee', $id)->first();
        $user = User::where('id', $data1->user_id)->first();

        if (is_null($data2) or is_null($data3) or is_null($data4) or is_null($data5) or is_null($data6)){
            return view('admin.auditeeerror.auditee1show1', compact('data1', 'user'));
        }
        elseif (is_null($data7)){
            return view('admin.auditeeerror.auditee1show2', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'user'));
        }
        else {
            return view('admin.auditee1show', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'user'));
        }
    }

    public function showAuditor1($id) {
        $data1 = idauditor::where('id_identitas', $id)->first();
        $data2 = skkaperpo2::where('identitas', $id)->first();
        $data3 = skkaperpo3::where('identitas', $id)->first();
        $data4 = skkaperpo4::where('identitas', $id)->first();
        $data5 = skkaperpo5::where('identitas', $id)->first();
        $user = User::where('id', $data1->user_id)->first();

        if (is_null($data2) or is_null($data3) or is_null($data4)){
            return view('admin.auditorerror.auditor1_1show1', compact('data1', 'user'));
        }
        elseif (is_null($data5)){
            return view('admin.auditorerror.auditor1_1show2', compact('data1', 'data2', 'data3', 'data4', 'user'));
        }
        else {
            return view('admin.auditor1_1show', compact('data1', 'data2', 'data3', 'data4', 'data5', 'user'));
        }
    }

    public function showAuditor2($id) {
        $data1 = idauditorsmt::where('id_identitas', $id)->first();
        $data2 = skkapersmt2::where('identitas', $id)->first();
        $data3 = skkapersmt3::where('identitas', $id)->first();
        $data4 = skkapersmt4::where('identitas', $id)->first();
        $data5 = skkapersmt5::where('identitas', $id)->first();
        $data6 = skkapersmt6::where('identitas', $id)->first();
        $data7 = skkapersmt7::where('identitas', $id)->first();
        $data9 = skkapersmt9::where('identitas', $id)->first();
        $data10 = skkapersmt10::where('identitas', $id)->first();
        $data11 = skkapersmt11::where('identitas', $id)->first();
        $data12 = skkapersmt12::where('identitas', $id)->first();
        $data13 = skkapersmt13::where('identitas', $id)->first();
        $data14 = skkapersmt14::where('identitas', $id)->first();
        $data15 = skkapersmt15::where('identitas', $id)->first();
        $data16 = skkapersmt16::where('identitas', $id)->first();
        $data8 = skkapersmt8::where('identitas', $id)->first();
        $user = User::where('id', $data1->user_id)->first();

        if (is_null($data2) or is_null($data3) or is_null($data4) or is_null($data5) or is_null($data9) or is_null($data10) or is_null($data11) or is_null($data12) or is_null($data13) or is_null($data14) or is_null($data15) or is_null($data16)){
            return view('admin.auditorerror.auditor2_1show1', compact('data1', 'user'));
        }
        elseif (is_null($data8)){
            return view('admin.auditorerror.auditor2_1show2', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'user'));
        }
        else{
            return view('admin.auditor2_1show', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data9', 'data10', 'data11', 'data12', 'data13', 'data14', 'data15', 'data16', 'data8', 'user'));
        }
    }
}
