<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auditee.home');
    }

    public function indexSurvey1() {
        return view('auditee.survey1');
    }

    public function indexSurvey2() {
        return view('auditee.survey2');
    }

    public function indexSurvey3() {
        return view('auditee.survey3');
    }

    public function indexSurvey4() {
        return view('auditee.survey4');
    }

    public function indexSurvey5() {
        return view('auditee.survey5');
    }

    public function indexSurvey6() {
        return view('auditee.survey6');
    }

    public function indexSurvey7() {
        return view('auditee.survey7');
    }
}
