<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditorController extends Controller
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
    public function indexPlus()
    {
        return view('auditorplus.home');
    }
    public function index()
    {
        return view('auditor.home');
    }

    public function indexPerpo()
    {
        return view('auditor.skkaperpo1');
    }

    public function indexPerpo1()
    {
        return view('auditor.skkaperpo2');
    }

    public function indexPerpo2()
    {
        return view('auditor.skkaperpo3');
    }

    public function indexPerpo3()
    {
        return view('auditor.skkaperpo4');
    }

    public function indexPerpo4()
    {
        return view('auditor.skkaperpo5');
    }

    public function indexPerpoNew()
    {
        return view('auditor.skkaperpo6');
    }

    public function indexPersmt()
    {
        return view('auditor.skkapersmt1');
    }

    public function indexPersmt1()
    {
        return view('auditor.skkapersmt2');
    }

    public function indexPersmt2()
    {
        return view('auditor.skkapersmt3');
    }

    public function indexPersmt3()
    {
        return view('auditor.skkapersmt4');
    }

    public function indexPersmt4()
    {
        return view('auditor.skkapersmt5');
    }

    public function indexPersmt5()
    {
        return view('auditor.skkapersmt6');
    }

    public function indexPersmt6()
    {
        return view('auditor.skkapersmt7');
    }

    public function indexPersmt7()
    {
        return view('auditor.skkapersmt8');
    }

    public function indexPersmt8()
    {
        return view('auditor.skkapersmt9');
    }

    public function indexPersmt9()
    {
        return view('auditor.skkapersmt10');
    }

    public function indexPersmt10()
    {
        return view('auditor.skkapersmt11');
    }

    public function indexPersmt11()
    {
        return view('auditor.skkapersmt12');
    }

    public function indexPersmt12()
    {
        return view('auditor.skkapersmt13');
    }

    public function indexPersmt13()
    {
        return view('auditor.skkapersmt14');
    }

    public function indexPersmt14()
    {
        return view('auditor.skkapersmt15');
    }

    public function indexPersmt15()
    {
        return view('auditor.skkapersmt16');
    }
}
