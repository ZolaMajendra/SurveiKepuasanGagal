<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\auditee2;
use App\auditee3;
use App\auditee4;
use App\auditee5;
use App\auditee6;
use App\auditee7;
use App\grafikauditee;
use App\grafikpo;
use App\grafiksmt;
use App\idauditor;
use App\skkaperpo2;
use App\skkaperpo3;
use App\skkaperpo4;
use App\skkaperpo5;
use App\skkaperponew;
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
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    //index for menu auditee
    public function indexAuditee1() {

        $data = DB::table('identitas_auditee')
            ->leftJoin('users', 'identitas_auditee.user_id', '=', 'users.id')
            ->get();

        return view('admin.auditee1', compact('data'));
    }

    public function indexAuditee2() {
        $k1acount = auditee2::count();
        $k1ass = auditee2::where('kategori1a', '=', 'Sangat Setuju')->get()->count();
        $k1as = auditee2::where('kategori1a', '=', 'Setuju')->get()->count();
        $k1aks = auditee2::where('kategori1a', '=', 'Kurang Setuju')->get()->count();
        $k1ats = auditee2::where('kategori1a', '=', 'Tidak Setuju')->get()->count();
        $k1asts = auditee2::where('kategori1a', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k1acount == 0){
            return view('admin.auditeeerror.auditee2');
        }
        else{
            $k1a = array(
                'k1acount' => $k1acount,
                'k1ass' => $k1ass,
                'k1as' => $k1as,
                'k1aks' => $k1aks,
                'k1ats' => $k1ats,
                'k1asts' => $k1asts
            );

            $k1bss = auditee2::where('kategori1b', '=', 'Sangat Setuju')->get()->count();
            $k1bs = auditee2::where('kategori1b', '=', 'Setuju')->get()->count();
            $k1bks = auditee2::where('kategori1b', '=', 'Kurang Setuju')->get()->count();
            $k1bts = auditee2::where('kategori1b', '=', 'Tidak Setuju')->get()->count();
            $k1bsts = auditee2::where('kategori1b', '=', 'Sangat Tidak Setuju')->get()->count();

            $k1b = array(
                'k1bss' => $k1bss,
                'k1bs' => $k1bs,
                'k1bks' => $k1bks,
                'k1bts' => $k1bts,
                'k1bsts' => $k1bsts
            );

            $k1css = auditee2::where('kategori1c', '=', 'Sangat Setuju')->get()->count();
            $k1cs = auditee2::where('kategori1c', '=', 'Setuju')->get()->count();
            $k1cks = auditee2::where('kategori1c', '=', 'Kurang Setuju')->get()->count();
            $k1cts = auditee2::where('kategori1c', '=', 'Tidak Setuju')->get()->count();
            $k1csts = auditee2::where('kategori1c', '=', 'Sangat Tidak Setuju')->get()->count();

            $k1c = array(
                'k1css' => $k1css,
                'k1cs' => $k1cs,
                'k1cks' => $k1cks,
                'k1cts' => $k1cts,
                'k1csts' => $k1csts
            );

            $k1dss = auditee2::where('kategori1d', '=', 'Sangat Setuju')->get()->count();
            $k1ds = auditee2::where('kategori1d', '=', 'Setuju')->get()->count();
            $k1dks = auditee2::where('kategori1d', '=', 'Kurang Setuju')->get()->count();
            $k1dts = auditee2::where('kategori1d', '=', 'Tidak Setuju')->get()->count();
            $k1dsts = auditee2::where('kategori1d', '=', 'Sangat Tidak Setuju')->get()->count();

            $k1d = array(
                'k1dss' => $k1dss,
                'k1ds' => $k1ds,
                'k1dks' => $k1dks,
                'k1dts' => $k1dts,
                'k1dsts' => $k1dsts
            );

            $kategoria = ((($k1ass*5)+($k1as*4)+($k1aks*3)+($k1ats*2)+($k1asts*1))/($k1acount*5))*100;
            $kategorib = ((($k1bss*5)+($k1bs*4)+($k1bks*3)+($k1bts*2)+($k1bsts*1))/($k1acount*5))*100;
            $kategoric = ((($k1css*5)+($k1cs*4)+($k1cks*3)+($k1cts*2)+($k1csts*1))/($k1acount*5))*100;
            $kategorid = ((($k1dss*5)+($k1ds*4)+($k1dks*3)+($k1dts*2)+($k1dsts*1))/($k1acount*5))*100;
            $av = ($kategoria+$kategorib+$kategoric+$kategorid)/4;

            $graf = grafikauditee::findOrFail(1);
            $graf->persepsi = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Persepsi Manajemen Terhadap SPI')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'SPI sebagai bagian yang penting dalam tim manajemen auditee / unit operasional',
                    'SPI pada posisi yang independen dalam menjalankan tugasnya',
                    'Auditor berhak mendapatkan kebebasan dan akses tidak terbatas terhadap catatan, informasi, lokasi, dan karyawan dalam ruang lingkup penugasan mereka',
                    'Kegiatan audit internal mempromosikan orientasi kualitas kerja yang baik pada auditee',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria,$kategorib,$kategoric,$kategorid, 0,$av])
                ->dimensions(1000,500)
                ->responsive(false);

            return view('admin.auditee2', compact('k1a', 'k1b', 'k1c', 'k1d', 'chart'));
        }
    }

    public function indexAuditee3() {
        $k2acount = auditee3::count();
        $k2ass = auditee3::where('kategori2a', '=', 'Sangat Setuju')->get()->count();
        $k2as = auditee3::where('kategori2a', '=', 'Setuju')->get()->count();
        $k2aks = auditee3::where('kategori2a', '=', 'Kurang Setuju')->get()->count();
        $k2ats = auditee3::where('kategori2a', '=', 'Tidak Setuju')->get()->count();
        $k2asts = auditee3::where('kategori2a', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k2acount == 0){
            return view('admin.auditeeerror.auditee3');
        }
        else {
            $k2a = array(
                'k2acount' => $k2acount,
                'k2ass' => $k2ass,
                'k2as' => $k2as,
                'k2aks' => $k2aks,
                'k2ats' => $k2ats,
                'k2asts' => $k2asts
            );

            $k2bss = auditee3::where('kategori2b', '=', 'Sangat Setuju')->get()->count();
            $k2bs = auditee3::where('kategori2b', '=', 'Setuju')->get()->count();
            $k2bks = auditee3::where('kategori2b', '=', 'Kurang Setuju')->get()->count();
            $k2bts = auditee3::where('kategori2b', '=', 'Tidak Setuju')->get()->count();
            $k2bsts = auditee3::where('kategori2b', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2b = array(
                'k2bss' => $k2bss,
                'k2bs' => $k2bs,
                'k2bks' => $k2bks,
                'k2bts' => $k2bts,
                'k2bsts' => $k2bsts
            );

            $k2css = auditee3::where('kategori2c', '=', 'Sangat Setuju')->get()->count();
            $k2cs = auditee3::where('kategori2c', '=', 'Setuju')->get()->count();
            $k2cks = auditee3::where('kategori2c', '=', 'Kurang Setuju')->get()->count();
            $k2cts = auditee3::where('kategori2c', '=', 'Tidak Setuju')->get()->count();
            $k2csts = auditee3::where('kategori2c', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2c = array(
                'k2css' => $k2css,
                'k2cs' => $k2cs,
                'k2cks' => $k2cks,
                'k2cts' => $k2cts,
                'k2csts' => $k2csts
            );

            $k2dss = auditee3::where('kategori2d', '=', 'Sangat Setuju')->get()->count();
            $k2ds = auditee3::where('kategori2d', '=', 'Setuju')->get()->count();
            $k2dks = auditee3::where('kategori2d', '=', 'Kurang Setuju')->get()->count();
            $k2dts = auditee3::where('kategori2d', '=', 'Tidak Setuju')->get()->count();
            $k2dsts = auditee3::where('kategori2d', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2d = array(
                'k2dss' => $k2dss,
                'k2ds' => $k2ds,
                'k2dks' => $k2dks,
                'k2dts' => $k2dts,
                'k2dsts' => $k2dsts
            );

            $k2ess = auditee3::where('kategori2e', '=', 'Sangat Setuju')->get()->count();
            $k2es = auditee3::where('kategori2e', '=', 'Setuju')->get()->count();
            $k2eks = auditee3::where('kategori2e', '=', 'Kurang Setuju')->get()->count();
            $k2ets = auditee3::where('kategori2e', '=', 'Tidak Setuju')->get()->count();
            $k2ests = auditee3::where('kategori2e', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2e = array(
                'k2ess' => $k2ess,
                'k2es' => $k2es,
                'k2eks' => $k2eks,
                'k2ets' => $k2ets,
                'k2ests' => $k2ests
            );

            $k2fss = auditee3::where('kategori2f', '=', 'Sangat Setuju')->get()->count();
            $k2fs = auditee3::where('kategori2f', '=', 'Setuju')->get()->count();
            $k2fks = auditee3::where('kategori2f', '=', 'Kurang Setuju')->get()->count();
            $k2fts = auditee3::where('kategori2f', '=', 'Tidak Setuju')->get()->count();
            $k2fsts = auditee3::where('kategori2f', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2f = array(
                'k2fss' => $k2fss,
                'k2fs' => $k2fs,
                'k2fks' => $k2fks,
                'k2fts' => $k2fts,
                'k2fsts' => $k2fsts
            );

            $k2gss = auditee3::where('kategori2g', '=', 'Sangat Setuju')->get()->count();
            $k2gs = auditee3::where('kategori2g', '=', 'Setuju')->get()->count();
            $k2gks = auditee3::where('kategori2g', '=', 'Kurang Setuju')->get()->count();
            $k2gts = auditee3::where('kategori2g', '=', 'Tidak Setuju')->get()->count();
            $k2gsts = auditee3::where('kategori2g', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2g = array(
                'k2gss' => $k2gss,
                'k2gs' => $k2gs,
                'k2gks' => $k2gks,
                'k2gts' => $k2gts,
                'k2gsts' => $k2gsts
            );

            $k2hss = auditee3::where('kategori2h', '=', 'Sangat Setuju')->get()->count();
            $k2hs = auditee3::where('kategori2h', '=', 'Setuju')->get()->count();
            $k2hks = auditee3::where('kategori2h', '=', 'Kurang Setuju')->get()->count();
            $k2hts = auditee3::where('kategori2h', '=', 'Tidak Setuju')->get()->count();
            $k2hsts = auditee3::where('kategori2h', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2h = array(
                'k2hss' => $k2hss,
                'k2hs' => $k2hs,
                'k2hks' => $k2hks,
                'k2hts' => $k2hts,
                'k2hsts' => $k2hsts
            );

            $k2iss = auditee3::where('kategori2i', '=', 'Sangat Setuju')->get()->count();
            $k2is = auditee3::where('kategori2i', '=', 'Setuju')->get()->count();
            $k2iks = auditee3::where('kategori2i', '=', 'Kurang Setuju')->get()->count();
            $k2its = auditee3::where('kategori2i', '=', 'Tidak Setuju')->get()->count();
            $k2ists = auditee3::where('kategori2i', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2i = array(
                'k2iss' => $k2iss,
                'k2is' => $k2is,
                'k2iks' => $k2iks,
                'k2its' => $k2its,
                'k2ists' => $k2ists
            );

            $k2jss = auditee3::where('kategori2j', '=', 'Sangat Setuju')->get()->count();
            $k2js = auditee3::where('kategori2j', '=', 'Setuju')->get()->count();
            $k2jks = auditee3::where('kategori2j', '=', 'Kurang Setuju')->get()->count();
            $k2jts = auditee3::where('kategori2j', '=', 'Tidak Setuju')->get()->count();
            $k2jsts = auditee3::where('kategori2j', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2j = array(
                'k2jss' => $k2jss,
                'k2js' => $k2js,
                'k2jks' => $k2jks,
                'k2jts' => $k2jts,
                'k2jsts' => $k2jsts
            );

            $k2kss = auditee3::where('kategori2k', '=', 'Sangat Setuju')->get()->count();
            $k2ks = auditee3::where('kategori2k', '=', 'Setuju')->get()->count();
            $k2kks = auditee3::where('kategori2k', '=', 'Kurang Setuju')->get()->count();
            $k2kts = auditee3::where('kategori2k', '=', 'Tidak Setuju')->get()->count();
            $k2ksts = auditee3::where('kategori2k', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2k = array(
                'k2kss' => $k2kss,
                'k2ks' => $k2ks,
                'k2kks' => $k2kks,
                'k2kts' => $k2kts,
                'k2ksts' => $k2ksts
            );

            $k2lss = auditee3::where('kategori2l', '=', 'Sangat Setuju')->get()->count();
            $k2ls = auditee3::where('kategori2l', '=', 'Setuju')->get()->count();
            $k2lks = auditee3::where('kategori2l', '=', 'Kurang Setuju')->get()->count();
            $k2lts = auditee3::where('kategori2l', '=', 'Tidak Setuju')->get()->count();
            $k2lsts = auditee3::where('kategori2l', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2l = array(
                'k2lss' => $k2lss,
                'k2ls' => $k2ls,
                'k2lks' => $k2lks,
                'k2lts' => $k2lts,
                'k2lsts' => $k2lsts
            );

            $k2mss = auditee3::where('kategori2m', '=', 'Sangat Setuju')->get()->count();
            $k2ms = auditee3::where('kategori2m', '=', 'Setuju')->get()->count();
            $k2mks = auditee3::where('kategori2m', '=', 'Kurang Setuju')->get()->count();
            $k2mts = auditee3::where('kategori2m', '=', 'Tidak Setuju')->get()->count();
            $k2msts = auditee3::where('kategori2m', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2m = array(
                'k2mss' => $k2mss,
                'k2ms' => $k2ms,
                'k2mks' => $k2mks,
                'k2mts' => $k2mts,
                'k2msts' => $k2msts
            );

            $k2nss = auditee3::where('kategori2n', '=', 'Sangat Setuju')->get()->count();
            $k2ns = auditee3::where('kategori2n', '=', 'Setuju')->get()->count();
            $k2nks = auditee3::where('kategori2n', '=', 'Kurang Setuju')->get()->count();
            $k2nts = auditee3::where('kategori2n', '=', 'Tidak Setuju')->get()->count();
            $k2nsts = auditee3::where('kategori2n', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2n = array(
                'k2nss' => $k2nss,
                'k2ns' => $k2ns,
                'k2nks' => $k2nks,
                'k2nts' => $k2nts,
                'k2nsts' => $k2nsts
            );

            $k2oss = auditee3::where('kategori2o', '=', 'Sangat Setuju')->get()->count();
            $k2os = auditee3::where('kategori2o', '=', 'Setuju')->get()->count();
            $k2oks = auditee3::where('kategori2o', '=', 'Kurang Setuju')->get()->count();
            $k2ots = auditee3::where('kategori2o', '=', 'Tidak Setuju')->get()->count();
            $k2osts = auditee3::where('kategori2o', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2o = array(
                'k2oss' => $k2oss,
                'k2os' => $k2os,
                'k2oks' => $k2oks,
                'k2ots' => $k2ots,
                'k2osts' => $k2osts
            );

            $k2pss = auditee3::where('kategori2p', '=', 'Sangat Setuju')->get()->count();
            $k2ps = auditee3::where('kategori2p', '=', 'Setuju')->get()->count();
            $k2pks = auditee3::where('kategori2p', '=', 'Kurang Setuju')->get()->count();
            $k2pts = auditee3::where('kategori2p', '=', 'Tidak Setuju')->get()->count();
            $k2psts = auditee3::where('kategori2p', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2p = array(
                'k2pss' => $k2pss,
                'k2ps' => $k2ps,
                'k2pks' => $k2pks,
                'k2pts' => $k2pts,
                'k2psts' => $k2psts
            );

            $k2qss = auditee3::where('kategori2q', '=', 'Sangat Setuju')->get()->count();
            $k2qs = auditee3::where('kategori2q', '=', 'Setuju')->get()->count();
            $k2qks = auditee3::where('kategori2q', '=', 'Kurang Setuju')->get()->count();
            $k2qts = auditee3::where('kategori2q', '=', 'Tidak Setuju')->get()->count();
            $k2qsts = auditee3::where('kategori2q', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2q = array(
                'k2qss' => $k2qss,
                'k2qs' => $k2qs,
                'k2qks' => $k2qks,
                'k2qts' => $k2qts,
                'k2qsts' => $k2qsts
            );

            $k2rss = auditee3::where('kategori2r', '=', 'Sangat Setuju')->get()->count();
            $k2rs = auditee3::where('kategori2r', '=', 'Setuju')->get()->count();
            $k2rks = auditee3::where('kategori2r', '=', 'Kurang Setuju')->get()->count();
            $k2rts = auditee3::where('kategori2r', '=', 'Tidak Setuju')->get()->count();
            $k2rsts = auditee3::where('kategori2r', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2r = array(
                'k2rss' => $k2rss,
                'k2rs' => $k2rs,
                'k2rks' => $k2rks,
                'k2rts' => $k2rts,
                'k2rsts' => $k2rsts
            );

            $k2sss = auditee3::where('kategori2s', '=', 'Sangat Setuju')->get()->count();
            $k2ss = auditee3::where('kategori2s', '=', 'Setuju')->get()->count();
            $k2sks = auditee3::where('kategori2s', '=', 'Kurang Setuju')->get()->count();
            $k2sts = auditee3::where('kategori2s', '=', 'Tidak Setuju')->get()->count();
            $k2ssts = auditee3::where('kategori2s', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2s = array(
                'k2sss' => $k2sss,
                'k2ss' => $k2ss,
                'k2sks' => $k2sks,
                'k2sts' => $k2sts,
                'k2ssts' => $k2ssts
            );

            $k2tss = auditee3::where('kategori2t', '=', 'Sangat Setuju')->get()->count();
            $k2ts = auditee3::where('kategori2t', '=', 'Setuju')->get()->count();
            $k2tks = auditee3::where('kategori2t', '=', 'Kurang Setuju')->get()->count();
            $k2tts = auditee3::where('kategori2t', '=', 'Tidak Setuju')->get()->count();
            $k2tsts = auditee3::where('kategori2t', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2t = array(
                'k2tss' => $k2tss,
                'k2ts' => $k2ts,
                'k2tks' => $k2tks,
                'k2tts' => $k2tts,
                'k2tsts' => $k2tsts
            );

            $k2uss = auditee3::where('kategori2u', '=', 'Sangat Setuju')->get()->count();
            $k2us = auditee3::where('kategori2u', '=', 'Setuju')->get()->count();
            $k2uks = auditee3::where('kategori2u', '=', 'Kurang Setuju')->get()->count();
            $k2uts = auditee3::where('kategori2u', '=', 'Tidak Setuju')->get()->count();
            $k2usts = auditee3::where('kategori2u', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2u = array(
                'k2uss' => $k2uss,
                'k2us' => $k2us,
                'k2uks' => $k2uks,
                'k2uts' => $k2uts,
                'k2usts' => $k2usts
            );

            $k2vss = auditee3::where('kategori2v', '=', 'Sangat Setuju')->get()->count();
            $k2vs = auditee3::where('kategori2v', '=', 'Setuju')->get()->count();
            $k2vks = auditee3::where('kategori2v', '=', 'Kurang Setuju')->get()->count();
            $k2vts = auditee3::where('kategori2v', '=', 'Tidak Setuju')->get()->count();
            $k2vsts = auditee3::where('kategori2v', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2v = array(
                'k2vss' => $k2vss,
                'k2vs' => $k2vs,
                'k2vks' => $k2vks,
                'k2vts' => $k2vts,
                'k2vsts' => $k2vsts
            );

            $k2wss = auditee3::where('kategori2w', '=', 'Sangat Setuju')->get()->count();
            $k2ws = auditee3::where('kategori2w', '=', 'Setuju')->get()->count();
            $k2wks = auditee3::where('kategori2w', '=', 'Kurang Setuju')->get()->count();
            $k2wts = auditee3::where('kategori2w', '=', 'Tidak Setuju')->get()->count();
            $k2wsts = auditee3::where('kategori2w', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2w = array(
                'k2wss' => $k2wss,
                'k2ws' => $k2ws,
                'k2wks' => $k2wks,
                'k2wts' => $k2wts,
                'k2wsts' => $k2wsts
            );

            $k2xss = auditee3::where('kategori2x', '=', 'Sangat Setuju')->get()->count();
            $k2xs = auditee3::where('kategori2x', '=', 'Setuju')->get()->count();
            $k2xks = auditee3::where('kategori2x', '=', 'Kurang Setuju')->get()->count();
            $k2xts = auditee3::where('kategori2x', '=', 'Tidak Setuju')->get()->count();
            $k2xsts = auditee3::where('kategori2x', '=', 'Sangat Tidak Setuju')->get()->count();

            $k2x = array(
                'k2xss' => $k2xss,
                'k2xs' => $k2xs,
                'k2xks' => $k2xks,
                'k2xts' => $k2xts,
                'k2xsts' => $k2xsts
            );

            $kategoria = ((($k2ass * 5) + ($k2as * 4) + ($k2aks * 3) + ($k2ats * 2) + ($k2asts * 1)) / ($k2acount * 5)) * 100;
            $kategorib = ((($k2bss * 5) + ($k2bs * 4) + ($k2bks * 3) + ($k2bts * 2) + ($k2bsts * 1)) / ($k2acount * 5)) * 100;
            $kategoric = ((($k2css * 5) + ($k2cs * 4) + ($k2cks * 3) + ($k2cts * 2) + ($k2csts * 1)) / ($k2acount * 5)) * 100;
            $kategorid = ((($k2dss * 5) + ($k2ds * 4) + ($k2dks * 3) + ($k2dts * 2) + ($k2dsts * 1)) / ($k2acount * 5)) * 100;
            $kategorie = ((($k2ess * 5) + ($k2es * 4) + ($k2eks * 3) + ($k2ets * 2) + ($k2ests * 1)) / ($k2acount * 5)) * 100;
            $kategorif = ((($k2fss * 5) + ($k2fs * 4) + ($k2fks * 3) + ($k2fts * 2) + ($k2fsts * 1)) / ($k2acount * 5)) * 100;
            $kategorig = ((($k2gss * 5) + ($k2gs * 4) + ($k2gks * 3) + ($k2gts * 2) + ($k2gsts * 1)) / ($k2acount * 5)) * 100;
            $kategorih = ((($k2hss * 5) + ($k2hs * 4) + ($k2hks * 3) + ($k2hts * 2) + ($k2hsts * 1)) / ($k2acount * 5)) * 100;
            $kategorii = ((($k2iss * 5) + ($k2is * 4) + ($k2iks * 3) + ($k2its * 2) + ($k2ists * 1)) / ($k2acount * 5)) * 100;
            $kategorij = ((($k2jss * 5) + ($k2js * 4) + ($k2jks * 3) + ($k2jts * 2) + ($k2jsts * 1)) / ($k2acount * 5)) * 100;
            $kategorik = ((($k2kss * 5) + ($k2ks * 4) + ($k2kks * 3) + ($k2kts * 2) + ($k2ksts * 1)) / ($k2acount * 5)) * 100;
            $kategoril = ((($k2lss * 5) + ($k2ls * 4) + ($k2lks * 3) + ($k2lts * 2) + ($k2lsts * 1)) / ($k2acount * 5)) * 100;
            $kategorim = ((($k2mss * 5) + ($k2ms * 4) + ($k2mks * 3) + ($k2mts * 2) + ($k2msts * 1)) / ($k2acount * 5)) * 100;
            $kategorin = ((($k2nss * 5) + ($k2ns * 4) + ($k2nks * 3) + ($k2nts * 2) + ($k2nsts * 1)) / ($k2acount * 5)) * 100;
            $kategorio = ((($k2oss * 5) + ($k2os * 4) + ($k2oks * 3) + ($k2ots * 2) + ($k2osts * 1)) / ($k2acount * 5)) * 100;
            $kategorip = ((($k2pss * 5) + ($k2ps * 4) + ($k2pks * 3) + ($k2pts * 2) + ($k2psts * 1)) / ($k2acount * 5)) * 100;
            $kategoriq = ((($k2qss * 5) + ($k2qs * 4) + ($k2qks * 3) + ($k2qts * 2) + ($k2qsts * 1)) / ($k2acount * 5)) * 100;
            $kategorir = ((($k2rss * 5) + ($k2rs * 4) + ($k2rks * 3) + ($k2rts * 2) + ($k2rsts * 1)) / ($k2acount * 5)) * 100;
            $kategoris = ((($k2sss * 5) + ($k2ss * 4) + ($k2sks * 3) + ($k2sts * 2) + ($k2ssts * 1)) / ($k2acount * 5)) * 100;
            $kategorit = ((($k2tss * 5) + ($k2ts * 4) + ($k2tks * 3) + ($k2tts * 2) + ($k2tsts * 1)) / ($k2acount * 5)) * 100;
            $kategoriu = ((($k2uss * 5) + ($k2us * 4) + ($k2uks * 3) + ($k2uts * 2) + ($k2usts * 1)) / ($k2acount * 5)) * 100;
            $kategoriv = ((($k2vss * 5) + ($k2vs * 4) + ($k2vks * 3) + ($k2vts * 2) + ($k2vsts * 1)) / ($k2acount * 5)) * 100;
            $kategoriw = ((($k2wss * 5) + ($k2ws * 4) + ($k2wks * 3) + ($k2wts * 2) + ($k2wsts * 1)) / ($k2acount * 5)) * 100;
            $kategorix = ((($k2xss * 5) + ($k2xs * 4) + ($k2xks * 3) + ($k2xts * 2) + ($k2xsts * 1)) / ($k2acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie + $kategorif + $kategorig + $kategorih + $kategorii + $kategorij + $kategorik + $kategoril + $kategorim + $kategorin + $kategorio + $kategorip + $kategoriq + $kategorir + $kategoris + $kategorit + $kategoriu + $kategoriv + $kategoriw + $kategorix) / 24;

            $graf = grafikauditee::findOrFail(1);
            $graf->internal = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Staff Audit Internal')
                ->elementLabel('Presentase (%)')
                ->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '', 'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, $kategorif, $kategorig, $kategorih, $kategorii, $kategorij, $kategorik, $kategoril, $kategorim, $kategorin, $kategorio, $kategorip, $kategoriq, $kategorir, $kategoris, $kategorit, $kategoriu, $kategoriv, $kategoriw, $kategorix, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditee3', compact('chart', 'k2a', 'k2b', 'k2c', 'k2d', 'k2e', 'k2f', 'k2g', 'k2h', 'k2i', 'k2j', 'k2k', 'k2l', 'k2m', 'k2n', 'k2o', 'k2p', 'k2q', 'k2r', 'k2s', 'k2t', 'k2u', 'k2v', 'k2w', 'k2x'));
        }
    }

    public function indexAuditee4() {
        $k3acount = auditee4::count();
        $k3ass = auditee4::where('kategori3a', '=', 'Sangat Setuju')->get()->count();
        $k3as = auditee4::where('kategori3a', '=', 'Setuju')->get()->count();
        $k3aks = auditee4::where('kategori3a', '=', 'Kurang Setuju')->get()->count();
        $k3ats = auditee4::where('kategori3a', '=', 'Tidak Setuju')->get()->count();
        $k3asts = auditee4::where('kategori3a', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k3acount == 0){
            return view('admin.auditeeerror.auditee4');
        }
        else {
            $k3a = array(
                'k3acount' => $k3acount,
                'k3ass' => $k3ass,
                'k3as' => $k3as,
                'k3aks' => $k3aks,
                'k3ats' => $k3ats,
                'k3asts' => $k3asts
            );

            $k3bss = auditee4::where('kategori3b', '=', 'Sangat Setuju')->get()->count();
            $k3bs = auditee4::where('kategori3b', '=', 'Setuju')->get()->count();
            $k3bks = auditee4::where('kategori3b', '=', 'Kurang Setuju')->get()->count();
            $k3bts = auditee4::where('kategori3b', '=', 'Tidak Setuju')->get()->count();
            $k3bsts = auditee4::where('kategori3b', '=', 'Sangat Tidak Setuju')->get()->count();

            $k3b = array(
                'k3bss' => $k3bss,
                'k3bs' => $k3bs,
                'k3bks' => $k3bks,
                'k3bts' => $k3bts,
                'k3bsts' => $k3bsts
            );

            $k3css = auditee4::where('kategori3c', '=', 'Sangat Setuju')->get()->count();
            $k3cs = auditee4::where('kategori3c', '=', 'Setuju')->get()->count();
            $k3cks = auditee4::where('kategori3c', '=', 'Kurang Setuju')->get()->count();
            $k3cts = auditee4::where('kategori3c', '=', 'Tidak Setuju')->get()->count();
            $k3csts = auditee4::where('kategori3c', '=', 'Sangat Tidak Setuju')->get()->count();

            $k3c = array(
                'k3css' => $k3css,
                'k3cs' => $k3cs,
                'k3cks' => $k3cks,
                'k3cts' => $k3cts,
                'k3csts' => $k3csts
            );

            $k3dss = auditee4::where('kategori3d', '=', 'Sangat Setuju')->get()->count();
            $k3ds = auditee4::where('kategori3d', '=', 'Setuju')->get()->count();
            $k3dks = auditee4::where('kategori3d', '=', 'Kurang Setuju')->get()->count();
            $k3dts = auditee4::where('kategori3d', '=', 'Tidak Setuju')->get()->count();
            $k3dsts = auditee4::where('kategori3d', '=', 'Sangat Tidak Setuju')->get()->count();

            $k3d = array(
                'k3dss' => $k3dss,
                'k3ds' => $k3ds,
                'k3dks' => $k3dks,
                'k3dts' => $k3dts,
                'k3dsts' => $k3dsts
            );

            $kategoria = ((($k3ass * 5) + ($k3as * 4) + ($k3aks * 3) + ($k3ats * 2) + ($k3asts * 1)) / ($k3acount * 5)) * 100;
            $kategorib = ((($k3bss * 5) + ($k3bs * 4) + ($k3bks * 3) + ($k3bts * 2) + ($k3bsts * 1)) / ($k3acount * 5)) * 100;
            $kategoric = ((($k3css * 5) + ($k3cs * 4) + ($k3cks * 3) + ($k3cts * 2) + ($k3csts * 1)) / ($k3acount * 5)) * 100;
            $kategorid = ((($k3dss * 5) + ($k3ds * 4) + ($k3dks * 3) + ($k3dts * 2) + ($k3dsts * 1)) / ($k3acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid) / 4;

            $graf = grafikauditee::findOrFail(1);
            $graf->lingkup = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Ruang Lingkup Pekerjaan Audit')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Pemilihan area atau topik yang penting untuk diaudit sudah tepat',
                    'Auditor mempertimbangkan saran dalam menentukan area atau topik sesuai dengan kebutuhan perbaikan kinerja operasional unit',
                    'Pemberitahuan pra-audit terkait maksud dan lingkup penugasan sudah cukup jelas dan dapat dipahami',
                    'Auditor sudah mempertimbangkan tanggapan auditee tentang area of improvement yang ditemukan dan rekomendasi yang akan diberikan saat exit meeting',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditee4', compact('k3a', 'k3b', 'k3c', 'k3d', 'chart'));
        }
    }

    public function indexAuditee5() {
        $k4acount = auditee5::count();
        $k4ass = auditee5::where('kategori4a', '=', 'Sangat Setuju')->get()->count();
        $k4as = auditee5::where('kategori4a', '=', 'Setuju')->get()->count();
        $k4aks = auditee5::where('kategori4a', '=', 'Kurang Setuju')->get()->count();
        $k4ats = auditee5::where('kategori4a', '=', 'Tidak Setuju')->get()->count();
        $k4asts = auditee5::where('kategori4a', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k4acount == 0){
            return view('admin.auditeeerror.auditee5');
        }
        else {
            $k4a = array(
                'k4acount' => $k4acount,
                'k4ass' => $k4ass,
                'k4as' => $k4as,
                'k4aks' => $k4aks,
                'k4ats' => $k4ats,
                'k4asts' => $k4asts
            );

            $k4bss = auditee5::where('kategori4b', '=', 'Sangat Setuju')->get()->count();
            $k4bs = auditee5::where('kategori4b', '=', 'Setuju')->get()->count();
            $k4bks = auditee5::where('kategori4b', '=', 'Kurang Setuju')->get()->count();
            $k4bts = auditee5::where('kategori4b', '=', 'Tidak Setuju')->get()->count();
            $k4bsts = auditee5::where('kategori4b', '=', 'Sangat Tidak Setuju')->get()->count();

            $k4b = array(
                'k4bss' => $k4bss,
                'k4bs' => $k4bs,
                'k4bks' => $k4bks,
                'k4bts' => $k4bts,
                'k4bsts' => $k4bsts
            );

            $k4css = auditee5::where('kategori4c', '=', 'Sangat Setuju')->get()->count();
            $k4cs = auditee5::where('kategori4c', '=', 'Setuju')->get()->count();
            $k4cks = auditee5::where('kategori4c', '=', 'Kurang Setuju')->get()->count();
            $k4cts = auditee5::where('kategori4c', '=', 'Tidak Setuju')->get()->count();
            $k4csts = auditee5::where('kategori4c', '=', 'Sangat Tidak Setuju')->get()->count();

            $k4c = array(
                'k4css' => $k4css,
                'k4cs' => $k4cs,
                'k4cks' => $k4cks,
                'k4cts' => $k4cts,
                'k4csts' => $k4csts
            );

            $k4dss = auditee5::where('kategori4d', '=', 'Sangat Setuju')->get()->count();
            $k4ds = auditee5::where('kategori4d', '=', 'Setuju')->get()->count();
            $k4dks = auditee5::where('kategori4d', '=', 'Kurang Setuju')->get()->count();
            $k4dts = auditee5::where('kategori4d', '=', 'Tidak Setuju')->get()->count();
            $k4dsts = auditee5::where('kategori4d', '=', 'Sangat Tidak Setuju')->get()->count();

            $k4d = array(
                'k4dss' => $k4dss,
                'k4ds' => $k4ds,
                'k4dks' => $k4dks,
                'k4dts' => $k4dts,
                'k4dsts' => $k4dsts
            );

            $k4ess = auditee5::where('kategori4e', '=', 'Sangat Setuju')->get()->count();
            $k4es = auditee5::where('kategori4e', '=', 'Setuju')->get()->count();
            $k4eks = auditee5::where('kategori4e', '=', 'Kurang Setuju')->get()->count();
            $k4ets = auditee5::where('kategori4e', '=', 'Tidak Setuju')->get()->count();
            $k4ests = auditee5::where('kategori4e', '=', 'Sangat Tidak Setuju')->get()->count();

            $k4e = array(
                'k4ess' => $k4ess,
                'k4es' => $k4es,
                'k4eks' => $k4eks,
                'k4ets' => $k4ets,
                'k4ests' => $k4ests
            );

            $k4fss = auditee5::where('kategori4f', '=', 'Sangat Setuju')->get()->count();
            $k4fs = auditee5::where('kategori4f', '=', 'Setuju')->get()->count();
            $k4fks = auditee5::where('kategori4f', '=', 'Kurang Setuju')->get()->count();
            $k4fts = auditee5::where('kategori4f', '=', 'Tidak Setuju')->get()->count();
            $k4fsts = auditee5::where('kategori4f', '=', 'Sangat Tidak Setuju')->get()->count();

            $k4f = array(
                'k4fss' => $k4fss,
                'k4fs' => $k4fs,
                'k4fks' => $k4fks,
                'k4fts' => $k4fts,
                'k4fsts' => $k4fsts
            );

            $kategoria = ((($k4ass * 5) + ($k4as * 4) + ($k4aks * 3) + ($k4ats * 2) + ($k4asts * 1)) / ($k4acount * 5)) * 100;
            $kategorib = ((($k4bss * 5) + ($k4bs * 4) + ($k4bks * 3) + ($k4bts * 2) + ($k4bsts * 1)) / ($k4acount * 5)) * 100;
            $kategoric = ((($k4css * 5) + ($k4cs * 4) + ($k4cks * 3) + ($k4cts * 2) + ($k4csts * 1)) / ($k4acount * 5)) * 100;
            $kategorid = ((($k4dss * 5) + ($k4ds * 4) + ($k4dks * 3) + ($k4dts * 2) + ($k4dsts * 1)) / ($k4acount * 5)) * 100;
            $kategorie = ((($k4ess * 5) + ($k4es * 4) + ($k4eks * 3) + ($k4ets * 2) + ($k4ests * 1)) / ($k4acount * 5)) * 100;
            $kategorif = ((($k4fss * 5) + ($k4fs * 4) + ($k4fks * 3) + ($k4fts * 2) + ($k4fsts * 1)) / ($k4acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie + $kategorif) / 6;

            $graf = grafikauditee::findOrFail(1);
            $graf->pelaksanaan = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Pelaksanaan Audit')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Auditor menyertakan surat tugas dalam pelaksanaan audit',
                    'Auditor menyertakan atau menunjukkan surat permintaan data / dokumen dalam meminta data / dokumen',
                    'Auditor melaksanakan final mapping end to end dengan auditee',
                    'Auditor menyampaikan secara lengkap dan jelas kegiatan audit pada entry meeting',
                    'Auditor menyampaikan secara lengkap dan jelas laporan hasil audit pada exit meeting',
                    'Auditor memonitoring tindak lanjut atas rekomendasi yang diberikan',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, $kategorif, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditee5', compact('k4a', 'k4b', 'k4c', 'k4d', 'k4e', 'k4f', 'chart'));
        }
    }

    public function indexAuditee6() {
        $k5acount = auditee6::count();
        $k5ass = auditee6::where('kategori5a', '=', 'Sangat Setuju')->get()->count();
        $k5as = auditee6::where('kategori5a', '=', 'Setuju')->get()->count();
        $k5aks = auditee6::where('kategori5a', '=', 'Kurang Setuju')->get()->count();
        $k5ats = auditee6::where('kategori5a', '=', 'Tidak Setuju')->get()->count();
        $k5asts = auditee6::where('kategori5a', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k5acount == 0){
            return view('admin.auditeeerror.auditee6');
        }
        else {
            $k5a = array(
                'k5acount' => $k5acount,
                'k5ass' => $k5ass,
                'k5as' => $k5as,
                'k5aks' => $k5aks,
                'k5ats' => $k5ats,
                'k5asts' => $k5asts
            );

            $k5bss = auditee6::where('kategori5b', '=', 'Sangat Setuju')->get()->count();
            $k5bs = auditee6::where('kategori5b', '=', 'Setuju')->get()->count();
            $k5bks = auditee6::where('kategori5b', '=', 'Kurang Setuju')->get()->count();
            $k5bts = auditee6::where('kategori5b', '=', 'Tidak Setuju')->get()->count();
            $k5bsts = auditee6::where('kategori5b', '=', 'Sangat Tidak Setuju')->get()->count();

            $k5b = array(
                'k5bss' => $k5bss,
                'k5bs' => $k5bs,
                'k5bks' => $k5bks,
                'k5bts' => $k5bts,
                'k5bsts' => $k5bsts
            );

            $k5css = auditee6::where('kategori5c', '=', 'Sangat Setuju')->get()->count();
            $k5cs = auditee6::where('kategori5c', '=', 'Setuju')->get()->count();
            $k5cks = auditee6::where('kategori5c', '=', 'Kurang Setuju')->get()->count();
            $k5cts = auditee6::where('kategori5c', '=', 'Tidak Setuju')->get()->count();
            $k5csts = auditee6::where('kategori5c', '=', 'Sangat Tidak Setuju')->get()->count();

            $k5c = array(
                'k5css' => $k5css,
                'k5cs' => $k5cs,
                'k5cks' => $k5cks,
                'k5cts' => $k5cts,
                'k5csts' => $k5csts
            );

            $k5dss = auditee6::where('kategori5d', '=', 'Sangat Setuju')->get()->count();
            $k5ds = auditee6::where('kategori5d', '=', 'Setuju')->get()->count();
            $k5dks = auditee6::where('kategori5d', '=', 'Kurang Setuju')->get()->count();
            $k5dts = auditee6::where('kategori5d', '=', 'Tidak Setuju')->get()->count();
            $k5dsts = auditee6::where('kategori5d', '=', 'Sangat Tidak Setuju')->get()->count();

            $k5d = array(
                'k5dss' => $k5dss,
                'k5ds' => $k5ds,
                'k5dks' => $k5dks,
                'k5dts' => $k5dts,
                'k5dsts' => $k5dsts
            );

            $k5ess = auditee6::where('kategori5e', '=', 'Sangat Setuju')->get()->count();
            $k5es = auditee6::where('kategori5e', '=', 'Setuju')->get()->count();
            $k5eks = auditee6::where('kategori5e', '=', 'Kurang Setuju')->get()->count();
            $k5ets = auditee6::where('kategori5e', '=', 'Tidak Setuju')->get()->count();
            $k5ests = auditee6::where('kategori5e', '=', 'Sangat Tidak Setuju')->get()->count();

            $k5e = array(
                'k5ess' => $k5ess,
                'k5es' => $k5es,
                'k5eks' => $k5eks,
                'k5ets' => $k5ets,
                'k5ests' => $k5ests
            );

            $kategoria = ((($k5ass * 5) + ($k5as * 4) + ($k5aks * 3) + ($k5ats * 2) + ($k5asts * 1)) / ($k5acount * 5)) * 100;
            $kategorib = ((($k5bss * 5) + ($k5bs * 4) + ($k5bks * 3) + ($k5bts * 2) + ($k5bsts * 1)) / ($k5acount * 5)) * 100;
            $kategoric = ((($k5css * 5) + ($k5cs * 4) + ($k5cks * 3) + ($k5cts * 2) + ($k5csts * 1)) / ($k5acount * 5)) * 100;
            $kategorid = ((($k5dss * 5) + ($k5ds * 4) + ($k5dks * 3) + ($k5dts * 2) + ($k5dsts * 1)) / ($k5acount * 5)) * 100;
            $kategorie = ((($k5ess * 5) + ($k5es * 4) + ($k5eks * 3) + ($k5ets * 2) + ($k5ests * 1)) / ($k5acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie) / 5;

            $graf = grafikauditee::findOrFail(1);
            $graf->proses = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Proses Dan Laporan Audit')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Auditor membeikan umpan balik kepada auditee atas isu – isu yang muncul',
                    'Waktu pelaksanaan audit berjalan dengan efektif',
                    'Laporan yang dihasilkan akurat, lengkap, objektif, meyakinkan, jelas, ringkas, bebas dari bahasa atau istilah-istilah yang menimbulkan multi tafsir, serta tepat waktu',
                    'Laporan mengemukakan penjelasan atau tanggapan auditee tentang hasil audit',
                    'Laporan hasil audit memuat temuan dan simpulan hasil audit secara objektif, serta rekomendasi yang konstruktif',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditee6', compact('k5a', 'k5b', 'k5c', 'k5d', 'k5e', 'chart'));
        }
    }

    public function indexAuditee7() {
        $data = auditee7::all();
        $count = 0;

        $graf = grafikauditee::findOrFail(1);
        if($graf->persepsi + $graf->internal + $graf->lingkup + $graf->pelaksanaan + $graf->proses == 0){
            $graf->total = 0;
        }
        else{
            $graf->total = ($graf->persepsi + $graf->internal + $graf->lingkup + $graf->pelaksanaan + $graf->proses)/5;
        }
        $graf->save();

        $hasil = grafikauditee::findOrFail(1);

        $chart = Charts::create('bar', 'highcharts')
            ->title('Persentase Total')
            ->elementLabel('Presentase (%)')
            ->labels([
                'Persepsi Manajemen Terhadap SPI',
                'Staff Audit Internal',
                'Ruang Lingkup Pekerjaan Audit',
                'Pelaksanaan Audit',
                'Proses dan Laporan Audit',
                '',
                'Presentase Total (%)'])
            ->values([$hasil->persepsi, $hasil->internal, $hasil->lingkup, $hasil->pelaksanaan, $hasil->proses, 0, $hasil->total])
            ->dimensions(1000, 500)
            ->responsive(false);

        return view('admin.auditee7', compact('data', 'count', 'hasil', 'chart'));
    }

    //index for menu auditor
        //content per po
    public function indexAuditorpo1() {
        $data = DB::table('identitas')
            ->leftJoin('users', 'identitas.user_id', '=', 'users.id')
            ->get();

        return view('admin.auditor1_1', compact('data'));
    }

    public function indexAuditorpo2(){
        $data = skkaperponew::all();
        $count = 0;

        if ($data->isEmpty()){
            return view('admin.auditorerror.auditor1_new');
        }
        else{
            return view('admin.auditor1_new', compact('data', 'count'));
        }
    }

    /*
    public function indexAuditorpo2() {
        $data = skkaperpo2::all();
        $count = 0;
        $k1count = skkaperpo2::count();
        $k1y = skkaperpo2::where('erbas_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k1t = skkaperpo2::where('erbas_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k2y = skkaperpo2::where('minta_data_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k2t = skkaperpo2::where('minta_data_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k3y = skkaperpo2::where('mslh_uang_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k3t = skkaperpo2::where('mslh_uang_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k4y = skkaperpo2::where('sppd_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k4t = skkaperpo2::where('sppd_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k5y = skkaperpo2::where('pembagian_ruang_lingkup_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k5t = skkaperpo2::where('pembagian_ruang_lingkup_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k6y = skkaperpo2::where('penentuan_kriteria_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k6t = skkaperpo2::where('penentuan_kriteria_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k7y = skkaperpo2::where('ruang_lingkup_terbebani_sblm_audit_pilihan', '=', 'Ya')->get()->count();
        $k7t = skkaperpo2::where('ruang_lingkup_terbebani_sblm_audit_pilihan', '=', 'Tidak')->get()->count();
        $k8y = skkaperpo2::where('ruang_lingkup_spesifik_sblm_audit', '=', 'Ya')->get()->count();
        $k8t = skkaperpo2::where('ruang_lingkup_spesifik_sblm_audit', '=', 'Tidak')->get()->count();
        $k9y = skkaperpo2::where('profile_risk_sblm_audit', '=', 'Ya')->get()->count();
        $k9t = skkaperpo2::where('profile_risk_sblm_audit', '=', 'Tidak')->get()->count();
        $k10y = skkaperpo2::where('knowledge_sharing', '=', 'Ya')->get()->count();
        $k10t = skkaperpo2::where('knowledge_sharing', '=', 'Tidak')->get()->count();
        $k11y = skkaperpo2::where('apqc_pilihan', '=', 'Ya')->get()->count();
        $k11t = skkaperpo2::where('apqc_pilihan', '=', 'Tidak')->get()->count();

        if ($data->isEmpty()){
            return view('admin.auditorerror.auditor1_2');
        }
        else{
            $k1 = array(
                'k1count' => $k1count,
                'k1y' => $k1y,
                'k1t' => $k1t,
            );

            $k2 = array(
                'k2y' => $k2y,
                'k2t' => $k2t,
            );


            $k3 = array(
                'k3y' => $k3y,
                'k3t' => $k3t,
            );


            $k4 = array(
                'k4y' => $k4y,
                'k4t' => $k4t,
            );


            $k5 = array(
                'k5y' => $k5y,
                'k5t' => $k5t,
            );


            $k6 = array(
                'k6y' => $k6y,
                'k6t' => $k6t,
            );


            $k7 = array(
                'k7y' => $k7y,
                'k7t' => $k7t,
            );


            $k8 = array(
                'k8y' => $k8y,
                'k8t' => $k8t,
            );


            $k9 = array(
                'k9y' => $k9y,
                'k9t' => $k9t,
            );


            $k10 = array(
                'k10y' => $k10y,
                'k10t' => $k10t,
            );


            $k11 = array(
                'k11y' => $k11y,
                'k11t' => $k11t,
            );

            $l1  = (($k1y*1)+($k1t*0))/($k1count*1)*100;
            $l2  = (($k2y*1)+($k2t*0))/($k1count*1)*100;
            $l3  = (($k3y*1)+($k3t*0))/($k1count*1)*100;
            $l4  = (($k4y*1)+($k4t*0))/($k1count*1)*100;
            $l5  = (($k5y*1)+($k5t*0))/($k1count*1)*100;
            $l6  = (($k6y*1)+($k6t*0))/($k1count*1)*100;
            $l7  = (($k7y*1)+($k7t*0))/($k1count*1)*100;
            $l8  = (($k8y*1)+($k8t*0))/($k1count*1)*100;
            $l9  = (($k9y*1)+($k9t*0))/($k1count*1)*100;
            $l10 = (($k10y*1)+($k10t*0))/($k1count*1)*100;
            $l11 = (($k11y*1)+($k11t*0))/($k1count*1)*100;
            $av  = ($l1+$l2+$l3+$l4+$l5+$l6+$l7+$l8+$l9+$l10+$l11)/11;

            $graf = grafikpo::findOrFail(1);
            $graf->sblm = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Sebelum Pelaksanaan Kegiatan Audit Dan Konsultasi')
                ->elementLabel('Presentase (%)')
                ->labels(['1', '2','3','4','5','6','7','8','9','10','11','','Presentase per Kategori (%)'])
                ->values([$l1,$l2,$l3,$l4,$l5,$l6,$l7,$l8,$l9,$l10,$l11,0,$av])
                ->dimensions(1000,500)
                ->responsive(false);

            return view('admin.auditor1_2', compact('data', 'count', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'chart'));
        }
    }
    public function indexAuditorpo3() {
        $data = skkaperpo3::all();
        $count = 0;
        $k1count = skkaperpo3::count();
        $k1y = skkaperpo3::where('sarana_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k1t = skkaperpo3::where('sarana_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k2y = skkaperpo3::where('minta_data_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k2t = skkaperpo3::where('minta_data_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k3y = skkaperpo3::where('kelengkapan_data_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k3t = skkaperpo3::where('kelengkapan_data_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k4y = skkaperpo3::where('profile_risk_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k4t = skkaperpo3::where('profile_risk_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k5y = skkaperpo3::where('erbas_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k5t = skkaperpo3::where('erbas_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k6y = skkaperpo3::where('uji_petik_pilihan', '=', 'Ya')->get()->count();
        $k6t = skkaperpo3::where('uji_petik_pilihan', '=', 'Tidak')->get()->count();

        $k7y = skkaperpo3::where('kooperatif_selama_audit_pilihan', '=', 'Ya')->get()->count();
        $k7t = skkaperpo3::where('kooperatif_selama_audit_pilihan', '=', 'Tidak')->get()->count();

        $k8y = skkaperpo3::where('jumlah_sdm', '=', 'Ya')->get()->count();
        $k8t = skkaperpo3::where('jumlah_sdm', '=', 'Tidak')->get()->count();

        $k9y = skkaperpo3::where('kemampuan_sdm', '=', 'Ya')->get()->count();
        $k9t = skkaperpo3::where('kemampuan_sdm', '=', 'Tidak')->get()->count();

        $k10y = skkaperpo3::where('hotel_pilihan', '=', 'Ya')->get()->count();
        $k10t = skkaperpo3::where('hotel_pilihan', '=', 'Tidak')->get()->count();

        $k11y = skkaperpo3::where('sulit_ditemui_selam_audit_pilihan', '=', 'Ya')->get()->count();
        $k11t = skkaperpo3::where('sulit_ditemui_selam_audit_pilihan', '=', 'Tidak')->get()->count();

        if ($data->isEmpty()){
            return view('admin.auditorerror.auditor1_3');
        }
        else {
            $k = array(
                'k1count' => $k1count,
                'k1y' => $k1y,
                'k1t' => $k1t,

                'k2y' => $k2y,
                'k2t' => $k2t,

                'k3y' => $k3y,
                'k3t' => $k3t,

                'k4y' => $k4y,
                'k4t' => $k4t,

                'k5y' => $k5y,
                'k5t' => $k5t,

                'k6y' => $k6y,
                'k6t' => $k6t,

                'k7y' => $k7y,
                'k7t' => $k7t,

                'k8y' => $k8y,
                'k8t' => $k8t,

                'k9y' => $k9y,
                'k9t' => $k9t,

                'k10y' => $k10y,
                'k10t' => $k10t,

                'k11y' => $k11y,
                'k11t' => $k11t,
            );

            $l1 = (($k1y * 1) + ($k1t * 0)) / ($k1count * 1) * 100;
            $l2 = (($k2y * 1) + ($k2t * 0)) / ($k1count * 1) * 100;
            $l3 = (($k3y * 1) + ($k3t * 0)) / ($k1count * 1) * 100;
            $l4 = (($k4y * 1) + ($k4t * 0)) / ($k1count * 1) * 100;
            $l5 = (($k5y * 1) + ($k5t * 0)) / ($k1count * 1) * 100;
            $l6 = (($k6y * 1) + ($k6t * 0)) / ($k1count * 1) * 100;
            $l7 = (($k7y * 1) + ($k7t * 0)) / ($k1count * 1) * 100;
            $l8 = (($k8y * 1) + ($k8t * 0)) / ($k1count * 1) * 100;
            $l9 = (($k9y * 1) + ($k9t * 0)) / ($k1count * 1) * 100;
            $l10 = (($k10y * 1) + ($k10t * 0)) / ($k1count * 1) * 100;
            $l11 = (($k11y * 1) + ($k11t * 0)) / ($k1count * 1) * 100;
            $av = ($l1 + $l2 + $l3 + $l4 + $l5 + $l6 + $l7 + $l8 + $l9 + $l10 + $l11) / 11;

            $graf = grafikpo::findOrFail(1);
            $graf->selama = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Selama Pelaksanaan Kegiatan Audit Dan Konsultasi')
                ->elementLabel('Presentase (%)')
                ->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '', 'Presentase per Kategori (%)'])
                ->values([$l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $l9, $l10, $l11, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor1_3', compact('data', 'count', 'k', 'chart'));
        }
    }


    public function indexAuditorpo4() {
        $data = skkaperpo4::all();
        $count = 0;
        $k1count = skkaperpo4::count();
        $k1y = skkaperpo4::where('erbas_setelah_audit_pilihan', '=', 'Ya')->get()->count();
        $k1t = skkaperpo4::where('erbas_setelah_audit_pilihan', '=', 'Tidak')->get()->count();

        $k2y = skkaperpo4::where('rekomendasi', '=', 'Ya')->get()->count();
        $k2t = skkaperpo4::where('rekomendasi', '=', 'Tidak')->get()->count();

        $k3y = skkaperpo4::where('evidence', '=', 'Ya')->get()->count();
        $k3t = skkaperpo4::where('evidence', '=', 'Tidak')->get()->count();

        $k4y = skkaperpo4::where('sppd_setelah_audit', '=', 'Ya')->get()->count();
        $k4t = skkaperpo4::where('sppd_setelah_audit', '=', 'Tidak')->get()->count();

        if ($data->isEmpty()){
            return view('admin.auditorerror.auditor1_4');
        }

        else {
            $k = array(
                'k1count' => $k1count,
                'k1y' => $k1y,
                'k1t' => $k1t,

                'k2y' => $k2y,
                'k2t' => $k2t,

                'k3y' => $k3y,
                'k3t' => $k3t,

                'k4y' => $k4y,
                'k4t' => $k4t,
            );

            $l1 = (($k1y * 1) + ($k1t * 0)) / ($k1count * 1) * 100;
            $l2 = (($k2y * 1) + ($k2t * 0)) / ($k1count * 1) * 100;
            $l3 = (($k3y * 1) + ($k3t * 0)) / ($k1count * 1) * 100;
            $l4 = (($k4y * 1) + ($k4t * 0)) / ($k1count * 1) * 100;
            $av = ($l1 + $l2 + $l3 + $l4) / 4;

            $graf = grafikpo::findOrFail(1);
            $graf->sesudah = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Setelah Pelaksanaan Kegiatan Audit Dan Konsultasi')
                ->elementLabel('Presentase (%)')
                ->labels(['1', '2', '3', '4', '', 'Presentase per Kategori (%)'])
                ->values([$l1, $l2, $l3, $l4, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor1_4', compact('data', 'count', 'k', 'chart'));
        }
    }

    public function indexAuditorpo5() {
        $data = skkaperpo5::all();
        $count = 0;

        $graf = grafikpo::findOrFail(1);
        if($graf->sblm + $graf->selama + $graf->sesudah == 0){
            $graf->total = 0;
        }
        else{
            $graf->total = ($graf->sblm + $graf->selama + $graf->sesudah)/3;
        }
        $graf->save();

        $hasil = grafikpo::findOrFail(1);

        $chart = Charts::create('bar', 'highcharts')
            ->title('Persentase Total')
            ->elementLabel('Presentase (%)')
            ->labels([
                'Sebelum Kegiatan Audit',
                'Selama Kegiatan Audit',
                'Sesudah Kegiatan Audit',
                '',
                'Presentase Total (%)'])
            ->values([$hasil->sblm, $hasil->selama, $hasil->sesudah, 0, $hasil->total])
            ->dimensions(1000, 500)
            ->responsive(false);

        return view('admin.auditor1_5', compact('data', 'count', 'hasil', 'chart'));
    }*/

        //content per smt
    public function indexAuditorsmt1() {
        $data = DB::table('identitaspersmt')
            ->leftJoin('users', 'identitaspersmt.user_id', '=', 'users.id')
            ->get();

        return view('admin.auditor2_1', compact('data'));
    }

    public function indexAuditorsmt2() {
        $k1acount = skkapersmt2::count();
        $k1ass  = skkapersmt2::where('jenjang_pendidikan', '=', 'Sangat Setuju')->get()->count();
        $k1as   = skkapersmt2::where('jenjang_pendidikan', '=', 'Setuju')->get()->count();
        $k1aks  = skkapersmt2::where('jenjang_pendidikan', '=', 'Kurang Setuju')->get()->count();
        $k1ats  = skkapersmt2::where('jenjang_pendidikan', '=', 'Tidak Setuju')->get()->count();
        $k1asts = skkapersmt2::where('jenjang_pendidikan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k1bss  = skkapersmt2::where('pelatihan_khusus', '=', 'Sangat Setuju')->get()->count();
        $k1bs   = skkapersmt2::where('pelatihan_khusus', '=', 'Setuju')->get()->count();
        $k1bks  = skkapersmt2::where('pelatihan_khusus', '=', 'Kurang Setuju')->get()->count();
        $k1bts  = skkapersmt2::where('pelatihan_khusus', '=', 'Tidak Setuju')->get()->count();
        $k1bsts = skkapersmt2::where('pelatihan_khusus', '=', 'Sangat Tidak Setuju')->get()->count();
        $k1css  = skkapersmt2::where('seminar_diluar_pln', '=', 'Sangat Setuju')->get()->count();
        $k1cs   = skkapersmt2::where('seminar_diluar_pln', '=', 'Setuju')->get()->count();
        $k1cks  = skkapersmt2::where('seminar_diluar_pln', '=', 'Kurang Setuju')->get()->count();
        $k1cts  = skkapersmt2::where('seminar_diluar_pln', '=', 'Tidak Setuju')->get()->count();
        $k1csts = skkapersmt2::where('seminar_diluar_pln', '=', 'Sangat Tidak Setuju')->get()->count();
        $k1dss  = skkapersmt2::where('kemampuan_masalah', '=', 'Sangat Setuju')->get()->count();
        $k1ds   = skkapersmt2::where('kemampuan_masalah', '=', 'Setuju')->get()->count();
        $k1dks  = skkapersmt2::where('kemampuan_masalah', '=', 'Kurang Setuju')->get()->count();
        $k1dts  = skkapersmt2::where('kemampuan_masalah', '=', 'Tidak Setuju')->get()->count();
        $k1dsts = skkapersmt2::where('kemampuan_masalah', '=', 'Sangat Tidak Setuju')->get()->count();
        $k1ess  = skkapersmt2::where('kemampuan_rekomendasi', '=', 'Sangat Setuju')->get()->count();
        $k1es   = skkapersmt2::where('kemampuan_rekomendasi', '=', 'Setuju')->get()->count();
        $k1eks  = skkapersmt2::where('kemampuan_rekomendasi', '=', 'Kurang Setuju')->get()->count();
        $k1ets  = skkapersmt2::where('kemampuan_rekomendasi', '=', 'Tidak Setuju')->get()->count();
        $k1ests = skkapersmt2::where('kemampuan_rekomendasi', '=', 'Sangat Tidak Setuju')->get()->count();
        $k1fss  = skkapersmt2::where('kerjasama_tim', '=', 'Sangat Setuju')->get()->count();
        $k1fs   = skkapersmt2::where('kerjasama_tim', '=', 'Setuju')->get()->count();
        $k1fks  = skkapersmt2::where('kerjasama_tim', '=', 'Kurang Setuju')->get()->count();
        $k1fts  = skkapersmt2::where('kerjasama_tim', '=', 'Tidak Setuju')->get()->count();
        $k1fsts = skkapersmt2::where('kerjasama_tim', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k1acount == 0){
            return view('admin.auditorerror.auditor2_2');
        }
        else{
            $k1a = array(
                'k1acount' => $k1acount,
                'k1ass' => $k1ass,
                'k1as' => $k1as,
                'k1aks' => $k1aks,
                'k1ats' => $k1ats,
                'k1asts' => $k1asts
            );
            $k1b = array(
                'k1bss'  => $k1bss,
                'k1bs'   => $k1bs,
                'k1bks'  => $k1bks,
                'k1bts'  => $k1bts,
                'k1bsts' => $k1bsts
            );


            $k1c = array(
                'k1css'  => $k1css,
                'k1cs'   => $k1cs,
                'k1cks'  => $k1cks,
                'k1cts'  => $k1cts,
                'k1csts' => $k1csts
            );


            $k1d = array(
                'k1dss'  => $k1dss,
                'k1ds'   => $k1ds,
                'k1dks'  => $k1dks,
                'k1dts'  => $k1dts,
                'k1dsts' => $k1dsts
            );


            $k1e = array(
                'k1ess'  => $k1ess,
                'k1es'   => $k1es,
                'k1eks'  => $k1eks,
                'k1ets'  => $k1ets,
                'k1ests' => $k1ests
            );


            $k1f = array(
                'k1fss'  => $k1fss,
                'k1fs'   => $k1fs,
                'k1fks'  => $k1fks,
                'k1fts'  => $k1fts,
                'k1fsts' => $k1fsts
            );

            $kategoria = ((($k1ass*5)+($k1as*4)+($k1aks*3)+($k1ats*2)+($k1asts*1))/($k1acount*5))*100;
            $kategorib = ((($k1bss*5)+($k1bs*4)+($k1bks*3)+($k1bts*2)+($k1bsts*1))/($k1acount*5))*100;
            $kategoric = ((($k1css*5)+($k1cs*4)+($k1cks*3)+($k1cts*2)+($k1csts*1))/($k1acount*5))*100;
            $kategorid = ((($k1dss*5)+($k1ds*4)+($k1dks*3)+($k1dts*2)+($k1dsts*1))/($k1acount*5))*100;
            $kategorie = ((($k1ess*5)+($k1es*4)+($k1eks*3)+($k1ets*2)+($k1ests*1))/($k1acount*5))*100;
            $kategorif = ((($k1fss*5)+($k1fs*4)+($k1fks*3)+($k1fts*2)+($k1fsts*1))/($k1acount*5))*100;
            $av = ($kategoria+$kategorib+$kategoric+$kategorid+$kategorie+$kategorif)/6;

            $graf = grafiksmt::findOrFail(1);
            $graf->pelatihan = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Pelatihan dan Kompetensi')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya diberikan kesempatan oleh PLN untuk melanjutkan jenjang pendidikan.',
                    'Saya merasa pelatihan khusus untuk penugasan kegiatan audit dan konsultasi sudah memadai.',
                    'Saya diberikan kesempatan oleh PLN untuk mengikuti berbagai seminar diluar PLN.',
                    'Saya dapat menyelesaikan masalah dalam kegiatan audit dan konsultasi dengan kemampuan yang saya miliki.',
                    'Saya memiliki kemampuan untuk mengkomunikasikan rekomendasi hasil kegiatan audit dan konsultasi.',
                    'Saya memiliki kemampuan kerjasama yang baik dalam tim.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria,$kategorib,$kategoric,$kategorid,$kategorie,$kategorif,0,$av])
                ->dimensions(1000,500)
                ->responsive(false);

            return view('admin.auditor2_2', compact('k1a', 'k1b', 'k1c', 'k1d', 'k1e', 'k1f', 'chart'));
        }
    }

    public function indexAuditorsmt3() {
        $k2acount = skkapersmt3::count();
        $k2ass  = skkapersmt3::where('emosional', '=', 'Sangat Setuju')->get()->count();
        $k2as   = skkapersmt3::where('emosional', '=', 'Setuju')->get()->count();
        $k2aks  = skkapersmt3::where('emosional', '=', 'Kurang Setuju')->get()->count();
        $k2ats  = skkapersmt3::where('emosional', '=', 'Tidak Setuju')->get()->count();
        $k2asts = skkapersmt3::where('emosional', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2bss  = skkapersmt3::where('berarti', '=', 'Sangat Setuju')->get()->count();
        $k2bs   = skkapersmt3::where('berarti', '=', 'Setuju')->get()->count();
        $k2bks  = skkapersmt3::where('berarti', '=', 'Kurang Setuju')->get()->count();
        $k2bts  = skkapersmt3::where('berarti', '=', 'Tidak Setuju')->get()->count();
        $k2bsts = skkapersmt3::where('berarti', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2css  = skkapersmt3::where('bagian', '=', 'Sangat Setuju')->get()->count();
        $k2cs   = skkapersmt3::where('bagian', '=', 'Setuju')->get()->count();
        $k2cks  = skkapersmt3::where('bagian', '=', 'Kurang Setuju')->get()->count();
        $k2cts  = skkapersmt3::where('bagian', '=', 'Tidak Setuju')->get()->count();
        $k2csts = skkapersmt3::where('bagian', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2dss  = skkapersmt3::where('masalah_pln', '=', 'Sangat Setuju')->get()->count();
        $k2ds   = skkapersmt3::where('masalah_pln', '=', 'Setuju')->get()->count();
        $k2dks  = skkapersmt3::where('masalah_pln', '=', 'Kurang Setuju')->get()->count();
        $k2dts  = skkapersmt3::where('masalah_pln', '=', 'Tidak Setuju')->get()->count();
        $k2dsts = skkapersmt3::where('masalah_pln', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2ess  = skkapersmt3::where('batas_normal', '=', 'Sangat Setuju')->get()->count();
        $k2es   = skkapersmt3::where('batas_normal', '=', 'Setuju')->get()->count();
        $k2eks  = skkapersmt3::where('batas_normal', '=', 'Kurang Setuju')->get()->count();
        $k2ets  = skkapersmt3::where('batas_normal', '=', 'Tidak Setuju')->get()->count();
        $k2ests = skkapersmt3::where('batas_normal', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2fss  = skkapersmt3::where('tinggal_komitmen', '=', 'Sangat Setuju')->get()->count();
        $k2fs   = skkapersmt3::where('tinggal_komitmen', '=', 'Setuju')->get()->count();
        $k2fks  = skkapersmt3::where('tinggal_komitmen', '=', 'Kurang Setuju')->get()->count();
        $k2fts  = skkapersmt3::where('tinggal_komitmen', '=', 'Tidak Setuju')->get()->count();
        $k2fsts = skkapersmt3::where('tinggal_komitmen', '=', 'Sangat Tidak Setuju')->get()->count();
        $k2gss  = skkapersmt3::where('loyalitas', '=', 'Sangat Setuju')->get()->count();
        $k2gs   = skkapersmt3::where('loyalitas', '=', 'Setuju')->get()->count();
        $k2gks  = skkapersmt3::where('loyalitas', '=', 'Kurang Setuju')->get()->count();
        $k2gts  = skkapersmt3::where('loyalitas', '=', 'Tidak Setuju')->get()->count();
        $k2gsts = skkapersmt3::where('loyalitas', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k2acount == 0){
            return view('admin.auditorerror.auditor2_3');
        }
        else {
            $k2a = array(
                'k2acount' => $k2acount,
                'k2ass' => $k2ass,
                'k2as' => $k2as,
                'k2aks' => $k2aks,
                'k2ats' => $k2ats,
                'k2asts' => $k2asts
            );


            $k2b = array(
                'k2bss' => $k2bss,
                'k2bs' => $k2bs,
                'k2bks' => $k2bks,
                'k2bts' => $k2bts,
                'k2bsts' => $k2bsts
            );


            $k2c = array(
                'k2css' => $k2css,
                'k2cs' => $k2cs,
                'k2cks' => $k2cks,
                'k2cts' => $k2cts,
                'k2csts' => $k2csts
            );


            $k2d = array(
                'k2dss' => $k2dss,
                'k2ds' => $k2ds,
                'k2dks' => $k2dks,
                'k2dts' => $k2dts,
                'k2dsts' => $k2dsts
            );


            $k2e = array(
                'k2ess' => $k2ess,
                'k2es' => $k2es,
                'k2eks' => $k2eks,
                'k2ets' => $k2ets,
                'k2ests' => $k2ests
            );


            $k2f = array(
                'k2fss' => $k2fss,
                'k2fs' => $k2fs,
                'k2fks' => $k2fks,
                'k2fts' => $k2fts,
                'k2fsts' => $k2fsts
            );


            $k2g = array(
                'k2gss' => $k2gss,
                'k2gs' => $k2gs,
                'k2gks' => $k2gks,
                'k2gts' => $k2gts,
                'k2gsts' => $k2gsts
            );

            $kategoria = ((($k2ass * 5) + ($k2as * 4) + ($k2aks * 3) + ($k2ats * 2) + ($k2asts * 1)) / ($k2acount * 5)) * 100;
            $kategorib = ((($k2bss * 5) + ($k2bs * 4) + ($k2bks * 3) + ($k2bts * 2) + ($k2bsts * 1)) / ($k2acount * 5)) * 100;
            $kategoric = ((($k2css * 5) + ($k2cs * 4) + ($k2cks * 3) + ($k2cts * 2) + ($k2csts * 1)) / ($k2acount * 5)) * 100;
            $kategorid = ((($k2dss * 5) + ($k2ds * 4) + ($k2dks * 3) + ($k2dts * 2) + ($k2dsts * 1)) / ($k2acount * 5)) * 100;
            $kategorie = ((($k2ess * 5) + ($k2es * 4) + ($k2eks * 3) + ($k2ets * 2) + ($k2ests * 1)) / ($k2acount * 5)) * 100;
            $kategorif = ((($k2fss * 5) + ($k2fs * 4) + ($k2fks * 3) + ($k2fts * 2) + ($k2fsts * 1)) / ($k2acount * 5)) * 100;
            $kategorig = ((($k2gss * 5) + ($k2gs * 4) + ($k2gks * 3) + ($k2gts * 2) + ($k2gsts * 1)) / ($k2acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie + $kategorif + $kategorig) / 7;

            $graf = grafiksmt::findOrFail(1);
            $graf->organisasional = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Komitmen Organisasional')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya merasa terikat secara emosional dengan PLN.',
                    'PLN sangat berarti bagi saya.',
                    'Saya merasa menjadi bagian dari PLN.',
                    'Saya merasa masalah PLN seperti masalah saya.',
                    'Saya mau berusaha diatas batas normal untuk memajukan PLN.',
                    'Saat ini saya tetap tinggal di PLN karena komitmen terhadap PLN.',
                    'Alasan utama saya tetap bekerja di PLN adalah karena loyalitas terhadap PLN.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, $kategorif, $kategorig, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_3', compact('k2a', 'k2b', 'k2c', 'k2d', 'k2e', 'k2f', 'k2g', 'chart'));
        }
    }

    public function indexAuditorsmt4() {
        $k3acount = skkapersmt4::count();
        $k3ass  = skkapersmt4::where('luar_biasa_kesuksesan_ai', '=', 'Sangat Setuju')->get()->count();
        $k3as   = skkapersmt4::where('luar_biasa_kesuksesan_ai', '=', 'Setuju')->get()->count();
        $k3aks  = skkapersmt4::where('luar_biasa_kesuksesan_ai', '=', 'Kurang Setuju')->get()->count();
        $k3ats  = skkapersmt4::where('luar_biasa_kesuksesan_ai', '=', 'Tidak Setuju')->get()->count();
        $k3asts = skkapersmt4::where('luar_biasa_kesuksesan_ai', '=', 'Sangat Tidak Setuju')->get()->count();
        $k3bss  = skkapersmt4::where('saya_ai_pln', '=', 'Sangat Setuju')->get()->count();
        $k3bs   = skkapersmt4::where('saya_ai_pln', '=', 'Setuju')->get()->count();
        $k3bks  = skkapersmt4::where('saya_ai_pln', '=', 'Kurang Setuju')->get()->count();
        $k3bts  = skkapersmt4::where('saya_ai_pln', '=', 'Tidak Setuju')->get()->count();
        $k3bsts = skkapersmt4::where('saya_ai_pln', '=', 'Sangat Tidak Setuju')->get()->count();
        $k3css  = skkapersmt4::where('inspirasi_kerja_terbaik', '=', 'Sangat Setuju')->get()->count();
        $k3cs   = skkapersmt4::where('inspirasi_kerja_terbaik', '=', 'Setuju')->get()->count();
        $k3cks  = skkapersmt4::where('inspirasi_kerja_terbaik', '=', 'Kurang Setuju')->get()->count();
        $k3cts  = skkapersmt4::where('inspirasi_kerja_terbaik', '=', 'Tidak Setuju')->get()->count();
        $k3csts = skkapersmt4::where('inspirasi_kerja_terbaik', '=', 'Sangat Tidak Setuju')->get()->count();
        $k3dss  = skkapersmt4::where('perkembangan_ai', '=', 'Sangat Setuju')->get()->count();
        $k3ds   = skkapersmt4::where('perkembangan_ai', '=', 'Setuju')->get()->count();
        $k3dks  = skkapersmt4::where('perkembangan_ai', '=', 'Kurang Setuju')->get()->count();
        $k3dts  = skkapersmt4::where('perkembangan_ai', '=', 'Tidak Setuju')->get()->count();
        $k3dsts = skkapersmt4::where('perkembangan_ai', '=', 'Sangat Tidak Setuju')->get()->count();
        $k3ess  = skkapersmt4::where('ai_profesi_terbaik', '=', 'Sangat Setuju')->get()->count();
        $k3es   = skkapersmt4::where('ai_profesi_terbaik', '=', 'Setuju')->get()->count();
        $k3eks  = skkapersmt4::where('ai_profesi_terbaik', '=', 'Kurang Setuju')->get()->count();
        $k3ets  = skkapersmt4::where('ai_profesi_terbaik', '=', 'Tidak Setuju')->get()->count();
        $k3ests = skkapersmt4::where('ai_profesi_terbaik', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k3acount == 0){
            return view('admin.auditorerror.auditor2_4');
        }
        else {
            $k3a = array(
                'k3acount' => $k3acount,
                'k3ass' => $k3ass,
                'k3as' => $k3as,
                'k3aks' => $k3aks,
                'k3ats' => $k3ats,
                'k3asts' => $k3asts
            );


            $k3b = array(
                'k3bss' => $k3bss,
                'k3bs' => $k3bs,
                'k3bks' => $k3bks,
                'k3bts' => $k3bts,
                'k3bsts' => $k3bsts
            );


            $k3c = array(
                'k3css' => $k3css,
                'k3cs' => $k3cs,
                'k3cks' => $k3cks,
                'k3cts' => $k3cts,
                'k3csts' => $k3csts
            );


            $k3d = array(
                'k3dss' => $k3dss,
                'k3ds' => $k3ds,
                'k3dks' => $k3dks,
                'k3dts' => $k3dts,
                'k3dsts' => $k3dsts
            );


            $k3e = array(
                'k3ess' => $k3ess,
                'k3es' => $k3es,
                'k3eks' => $k3eks,
                'k3ets' => $k3ets,
                'k3ests' => $k3ests
            );

            $kategoria = ((($k3ass * 5) + ($k3as * 4) + ($k3aks * 3) + ($k3ats * 2) + ($k3asts * 1)) / ($k3acount * 5)) * 100;
            $kategorib = ((($k3bss * 5) + ($k3bs * 4) + ($k3bks * 3) + ($k3bts * 2) + ($k3bsts * 1)) / ($k3acount * 5)) * 100;
            $kategoric = ((($k3css * 5) + ($k3cs * 4) + ($k3cks * 3) + ($k3cts * 2) + ($k3csts * 1)) / ($k3acount * 5)) * 100;
            $kategorid = ((($k3dss * 5) + ($k3ds * 4) + ($k3dks * 3) + ($k3dts * 2) + ($k3dsts * 1)) / ($k3acount * 5)) * 100;
            $kategorie = ((($k3ess * 5) + ($k3es * 4) + ($k3eks * 3) + ($k3ets * 2) + ($k3ests * 1)) / ($k3acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie) / 5;

            $graf = grafiksmt::findOrFail(1);
            $graf->profesional = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Komitmen Profesional')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya ingin melakukan usaha yang luar biasa melebihi yang diharapkan demi kesuksesan/keberhasilan Auditor Internal PLN.',
                    'Saya bangga memberitahu orang lain bahwa saya adalah Auditor Internal PLN.',
                    'Menjadi Auditor Internal PLN sangat menginspirasi saya untuk bekerja dengan sebaik-baiknya.',
                    'Saya sangat peduli dengan perkembangan auditor internal di Indonesia.',
                    'Bagi saya, menjadi Auditor Internal PLN adalah profesi terbaik dibandingkan profesi lainnya.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_4', compact('k3a', 'k3b', 'k3c', 'k3d', 'k3e', 'chart'));
        }
    }

    public function indexAuditorsmt5() {
        $k4acount = skkapersmt5::count();
        $k4ass  = skkapersmt5::where('maksimal_hasil_terbaik', '=', 'Sangat Setuju')->get()->count();
        $k4as   = skkapersmt5::where('maksimal_hasil_terbaik', '=', 'Setuju')->get()->count();
        $k4aks  = skkapersmt5::where('maksimal_hasil_terbaik', '=', 'Kurang Setuju')->get()->count();
        $k4ats  = skkapersmt5::where('maksimal_hasil_terbaik', '=', 'Tidak Setuju')->get()->count();
        $k4asts = skkapersmt5::where('maksimal_hasil_terbaik', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4bss  = skkapersmt5::where('tugas_tepat_waktu', '=', 'Sangat Setuju')->get()->count();
        $k4bs   = skkapersmt5::where('tugas_tepat_waktu', '=', 'Setuju')->get()->count();
        $k4bks  = skkapersmt5::where('tugas_tepat_waktu', '=', 'Kurang Setuju')->get()->count();
        $k4bts  = skkapersmt5::where('tugas_tepat_waktu', '=', 'Tidak Setuju')->get()->count();
        $k4bsts = skkapersmt5::where('tugas_tepat_waktu', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4css  = skkapersmt5::where('dekat_ke_atasan', '=', 'Sangat Setuju')->get()->count();
        $k4cs   = skkapersmt5::where('dekat_ke_atasan', '=', 'Setuju')->get()->count();
        $k4cks  = skkapersmt5::where('dekat_ke_atasan', '=', 'Kurang Setuju')->get()->count();
        $k4cts  = skkapersmt5::where('dekat_ke_atasan', '=', 'Tidak Setuju')->get()->count();
        $k4csts = skkapersmt5::where('dekat_ke_atasan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4dss  = skkapersmt5::where('saran_membangun', '=', 'Sangat Setuju')->get()->count();
        $k4ds   = skkapersmt5::where('saran_membangun', '=', 'Setuju')->get()->count();
        $k4dks  = skkapersmt5::where('saran_membangun', '=', 'Kurang Setuju')->get()->count();
        $k4dts  = skkapersmt5::where('saran_membangun', '=', 'Tidak Setuju')->get()->count();
        $k4dsts = skkapersmt5::where('saran_membangun', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4ess  = skkapersmt5::where('terbaik_daripada_rekan', '=', 'Sangat Setuju')->get()->count();
        $k4es   = skkapersmt5::where('terbaik_daripada_rekan', '=', 'Setuju')->get()->count();
        $k4eks  = skkapersmt5::where('terbaik_daripada_rekan', '=', 'Kurang Setuju')->get()->count();
        $k4ets  = skkapersmt5::where('terbaik_daripada_rekan', '=', 'Tidak Setuju')->get()->count();
        $k4ests = skkapersmt5::where('terbaik_daripada_rekan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4fss  = skkapersmt5::where('evaluasi_selalu_memuaskan', '=', 'Sangat Setuju')->get()->count();
        $k4fs   = skkapersmt5::where('evaluasi_selalu_memuaskan', '=', 'Setuju')->get()->count();
        $k4fks  = skkapersmt5::where('evaluasi_selalu_memuaskan', '=', 'Kurang Setuju')->get()->count();
        $k4fts  = skkapersmt5::where('evaluasi_selalu_memuaskan', '=', 'Tidak Setuju')->get()->count();
        $k4fsts = skkapersmt5::where('evaluasi_selalu_memuaskan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4gss  = skkapersmt5::where('respect_pada_saya', '=', 'Sangat Setuju')->get()->count();
        $k4gs   = skkapersmt5::where('respect_pada_saya', '=', 'Setuju')->get()->count();
        $k4gks  = skkapersmt5::where('respect_pada_saya', '=', 'Kurang Setuju')->get()->count();
        $k4gts  = skkapersmt5::where('respect_pada_saya', '=', 'Tidak Setuju')->get()->count();
        $k4gsts = skkapersmt5::where('respect_pada_saya', '=', 'Sangat Tidak Setuju')->get()->count();
        $k4hss  = skkapersmt5::where('hubungan_baik_auditee', '=', 'Sangat Setuju')->get()->count();
        $k4hs   = skkapersmt5::where('hubungan_baik_auditee', '=', 'Setuju')->get()->count();
        $k4hks  = skkapersmt5::where('hubungan_baik_auditee', '=', 'Kurang Setuju')->get()->count();
        $k4hts  = skkapersmt5::where('hubungan_baik_auditee', '=', 'Tidak Setuju')->get()->count();
        $k4hsts = skkapersmt5::where('hubungan_baik_auditee', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k4acount == 0){
            return view('admin.auditorerror.auditor2_5');
        }
        else{
            $k4a = array(
                'k4acount' => $k4acount,
                'k4ass'    => $k4ass,
                'k4as'     => $k4as,
                'k4aks'    => $k4aks,
                'k4ats'    => $k4ats,
                'k4asts'   => $k4asts
            );


            $k4b = array(
                'k4bss'  => $k4bss,
                'k4bs'   => $k4bs,
                'k4bks'  => $k4bks,
                'k4bts'  => $k4bts,
                'k4bsts' => $k4bsts
            );


            $k4c = array(
                'k4css'  => $k4css,
                'k4cs'   => $k4cs,
                'k4cks'  => $k4cks,
                'k4cts'  => $k4cts,
                'k4csts' => $k4csts
            );


            $k4d = array(
                'k4dss'  => $k4dss,
                'k4ds'   => $k4ds,
                'k4dks'  => $k4dks,
                'k4dts'  => $k4dts,
                'k4dsts' => $k4dsts
            );


            $k4e = array(
                'k4ess'  => $k4ess,
                'k4es'   => $k4es,
                'k4eks'  => $k4eks,
                'k4ets'  => $k4ets,
                'k4ests' => $k4ests
            );


            $k4f = array(
                'k4fss'  => $k4fss,
                'k4fs'   => $k4fs,
                'k4fks'  => $k4fks,
                'k4fts'  => $k4fts,
                'k4fsts' => $k4fsts
            );


            $k4g = array(
                'k4gss'  => $k4gss,
                'k4gs'   => $k4gs,
                'k4gks'  => $k4gks,
                'k4gts'  => $k4gts,
                'k4gsts' => $k4gsts
            );


            $k4h = array(
                'k4hss'  => $k4hss,
                'k4hs'   => $k4hs,
                'k4hks'  => $k4hks,
                'k4hts'  => $k4hts,
                'k4hsts' => $k4hsts
            );

            $kategoria = ((($k4ass*5)+($k4as*4)+($k4aks*3)+($k4ats*2)+($k4asts*1))/($k4acount*5))*100;
            $kategorib = ((($k4bss*5)+($k4bs*4)+($k4bks*3)+($k4bts*2)+($k4bsts*1))/($k4acount*5))*100;
            $kategoric = ((($k4css*5)+($k4cs*4)+($k4cks*3)+($k4cts*2)+($k4csts*1))/($k4acount*5))*100;
            $kategorid = ((($k4dss*5)+($k4ds*4)+($k4dks*3)+($k4dts*2)+($k4dsts*1))/($k4acount*5))*100;
            $kategorie = ((($k4ess*5)+($k4es*4)+($k4eks*3)+($k4ets*2)+($k4ests*1))/($k4acount*5))*100;
            $kategorif = ((($k4fss*5)+($k4fs*4)+($k4fks*3)+($k4fts*2)+($k4fsts*1))/($k4acount*5))*100;
            $kategorig = ((($k4gss*5)+($k4gs*4)+($k4gks*3)+($k4gts*2)+($k4gsts*1))/($k4acount*5))*100;
            $kategorih = ((($k4hss*5)+($k4hs*4)+($k4hks*3)+($k4hts*2)+($k4hsts*1))/($k4acount*5))*100;
            $av = ($kategoria+$kategorib+$kategoric+$kategorid+$kategorie+$kategorif+$kategorig+$kategorih)/8;

            $graf = grafiksmt::findOrFail(1);
            $graf->motivasi = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Motivasi Kerja')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya selalu berusaha semaksimal mungkin agar mendapatkan hasil terbaik.',
                    'Saya selalu menyelesaikan pekerjaan yang diberikan atasan tepat waktu.',
                    'Saya berusaha lebih dekat dengan atasan agar komunikasi berjalan baik.',
                    'Saya mendapatkan saran yang membangun untuk mendapatkan hasil kerja maksimal.',
                    'Saya selalu berusaha untuk menjadi lebih baik daripada rekan kerja saya.',
                    'Hasil evaluasi kerja saya selalu memuaskan.',
                    'Pencapaian kerja saya di tempat saya bekerja membuat orang respect kepada saya.',
                    'Saya selalu berusaha menjaga hubungan baik dengan auditee.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria,$kategorib,$kategoric,$kategorid,$kategorie,$kategorif,$kategorig,$kategorih,0,$av])
                ->dimensions(1000,500)
                ->responsive(false);

            return view('admin.auditor2_5', compact('k4a', 'k4b', 'k4c', 'k4d', 'k4e', 'k4f', 'k4g', 'k4h', 'chart'));
        }
    }

    public function indexAuditorsmt6() {
        $k5acount = skkapersmt6::count();
        $k5ass  = skkapersmt6::where('tidak_melanggar_aturan', '=', 'Sangat Setuju')->get()->count();
        $k5as   = skkapersmt6::where('tidak_melanggar_aturan', '=', 'Setuju')->get()->count();
        $k5aks  = skkapersmt6::where('tidak_melanggar_aturan', '=', 'Kurang Setuju')->get()->count();
        $k5ats  = skkapersmt6::where('tidak_melanggar_aturan', '=', 'Tidak Setuju')->get()->count();
        $k5asts = skkapersmt6::where('tidak_melanggar_aturan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k5bss  = skkapersmt6::where('kesesuaian_tugas', '=', 'Sangat Setuju')->get()->count();
        $k5bs   = skkapersmt6::where('kesesuaian_tugas', '=', 'Setuju')->get()->count();
        $k5bks  = skkapersmt6::where('kesesuaian_tugas', '=', 'Kurang Setuju')->get()->count();
        $k5bts  = skkapersmt6::where('kesesuaian_tugas', '=', 'Tidak Setuju')->get()->count();
        $k5bsts = skkapersmt6::where('kesesuaian_tugas', '=', 'Sangat Tidak Setuju')->get()->count();
        $k5css  = skkapersmt6::where('diterima_wajar', '=', 'Sangat Setuju')->get()->count();
        $k5cs   = skkapersmt6::where('diterima_wajar', '=', 'Setuju')->get()->count();
        $k5cks  = skkapersmt6::where('diterima_wajar', '=', 'Kurang Setuju')->get()->count();
        $k5cts  = skkapersmt6::where('diterima_wajar', '=', 'Tidak Setuju')->get()->count();
        $k5csts = skkapersmt6::where('diterima_wajar', '=', 'Sangat Tidak Setuju')->get()->count();
        $k5dss  = skkapersmt6::where('tugas_tidak_wajar', '=', 'Sangat Setuju')->get()->count();
        $k5ds   = skkapersmt6::where('tugas_tidak_wajar', '=', 'Setuju')->get()->count();
        $k5dks  = skkapersmt6::where('tugas_tidak_wajar', '=', 'Kurang Setuju')->get()->count();
        $k5dts  = skkapersmt6::where('tugas_tidak_wajar', '=', 'Tidak Setuju')->get()->count();
        $k5dsts = skkapersmt6::where('tugas_tidak_wajar', '=', 'Sangat Tidak Setuju')->get()->count();
        $k5ess  = skkapersmt6::where('sd_cukup', '=', 'Sangat Setuju')->get()->count();
        $k5es   = skkapersmt6::where('sd_cukup', '=', 'Setuju')->get()->count();
        $k5eks  = skkapersmt6::where('sd_cukup', '=', 'Kurang Setuju')->get()->count();
        $k5ets  = skkapersmt6::where('sd_cukup', '=', 'Tidak Setuju')->get()->count();
        $k5ests = skkapersmt6::where('sd_cukup', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k5acount == 0){
            return view('admin.auditorerror.auditor2_6');
        }
        else {
            $k5a = array(
                'k5acount' => $k5acount,
                'k5ass' => $k5ass,
                'k5as' => $k5as,
                'k5aks' => $k5aks,
                'k5ats' => $k5ats,
                'k5asts' => $k5asts
            );


            $k5b = array(
                'k5bss' => $k5bss,
                'k5bs' => $k5bs,
                'k5bks' => $k5bks,
                'k5bts' => $k5bts,
                'k5bsts' => $k5bsts
            );


            $k5c = array(
                'k5css' => $k5css,
                'k5cs' => $k5cs,
                'k5cks' => $k5cks,
                'k5cts' => $k5cts,
                'k5csts' => $k5csts
            );


            $k5d = array(
                'k5dss' => $k5dss,
                'k5ds' => $k5ds,
                'k5dks' => $k5dks,
                'k5dts' => $k5dts,
                'k5dsts' => $k5dsts
            );


            $k5e = array(
                'k5ess' => $k5ess,
                'k5es' => $k5es,
                'k5eks' => $k5eks,
                'k5ets' => $k5ets,
                'k5ests' => $k5ests
            );

            $kategoria = ((($k5ass * 5) + ($k5as * 4) + ($k5aks * 3) + ($k5ats * 2) + ($k5asts * 1)) / ($k5acount * 5)) * 100;
            $kategorib = ((($k5bss * 5) + ($k5bs * 4) + ($k5bks * 3) + ($k5bts * 2) + ($k5bsts * 1)) / ($k5acount * 5)) * 100;
            $kategoric = ((($k5css * 5) + ($k5cs * 4) + ($k5cks * 3) + ($k5cts * 2) + ($k5csts * 1)) / ($k5acount * 5)) * 100;
            $kategorid = ((($k5dss * 5) + ($k5ds * 4) + ($k5dks * 3) + ($k5dts * 2) + ($k5dsts * 1)) / ($k5acount * 5)) * 100;
            $kategorie = ((($k5ess * 5) + ($k5es * 4) + ($k5eks * 3) + ($k5ets * 2) + ($k5ests * 1)) / ($k5acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie) / 5;

            $graf = grafiksmt::findOrFail(1);
            $graf->konflik = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Konflik Peran')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya tidak pernah melanggar peraturan atau kebijakan untuk menyelesaikan suatu penugasan.',
                    'Saya menerima beberapa permintaan untuk melakukan suatu pekerjaan yang saling bersesuaian satu sama lain.',
                    'Saya melakukan hal-hal yang dapat diterima oleh seseorang ataupun orang lain.',
                    'Saya melaksanakan hal-hal yang tidak harus dilakukan seperti biasanya.',
                    'Saya menerima penugasan didukung material dan sumber daya yang cukup untuk melaksanakannya.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_6', compact('k5a', 'k5b', 'k5c', 'k5d', 'k5e', 'chart'));
        }
    }

    public function indexAuditorsmt7() {
        $k6acount = skkapersmt7::count();
        $k6ass  = skkapersmt7::where('puas_gaji', '=', 'Sangat Setuju')->get()->count();
        $k6as   = skkapersmt7::where('puas_gaji', '=', 'Setuju')->get()->count();
        $k6aks  = skkapersmt7::where('puas_gaji', '=', 'Kurang Setuju')->get()->count();
        $k6ats  = skkapersmt7::where('puas_gaji', '=', 'Tidak Setuju')->get()->count();
        $k6asts = skkapersmt7::where('puas_gaji', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6bss  = skkapersmt7::where('suka_pekerjaan', '=', 'Sangat Setuju')->get()->count();
        $k6bs   = skkapersmt7::where('suka_pekerjaan', '=', 'Setuju')->get()->count();
        $k6bks  = skkapersmt7::where('suka_pekerjaan', '=', 'Kurang Setuju')->get()->count();
        $k6bts  = skkapersmt7::where('suka_pekerjaan', '=', 'Tidak Setuju')->get()->count();
        $k6bsts = skkapersmt7::where('suka_pekerjaan', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6css  = skkapersmt7::where('tidak_ingin_pindah', '=', 'Sangat Setuju')->get()->count();
        $k6cs   = skkapersmt7::where('tidak_ingin_pindah', '=', 'Setuju')->get()->count();
        $k6cks  = skkapersmt7::where('tidak_ingin_pindah', '=', 'Kurang Setuju')->get()->count();
        $k6cts  = skkapersmt7::where('tidak_ingin_pindah', '=', 'Tidak Setuju')->get()->count();
        $k6csts = skkapersmt7::where('tidak_ingin_pindah', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6dss  = skkapersmt7::where('suka_daripada_teman', '=', 'Sangat Setuju')->get()->count();
        $k6ds   = skkapersmt7::where('suka_daripada_teman', '=', 'Setuju')->get()->count();
        $k6dks  = skkapersmt7::where('suka_daripada_teman', '=', 'Kurang Setuju')->get()->count();
        $k6dts  = skkapersmt7::where('suka_daripada_teman', '=', 'Tidak Setuju')->get()->count();
        $k6dsts = skkapersmt7::where('suka_daripada_teman', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6ess  = skkapersmt7::where('promosi', '=', 'Sangat Setuju')->get()->count();
        $k6es   = skkapersmt7::where('promosi', '=', 'Setuju')->get()->count();
        $k6eks  = skkapersmt7::where('promosi', '=', 'Kurang Setuju')->get()->count();
        $k6ets  = skkapersmt7::where('promosi', '=', 'Tidak Setuju')->get()->count();
        $k6ests = skkapersmt7::where('promosi', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6fss  = skkapersmt7::where('puas_penilaian_kinerja_ai', '=', 'Sangat Setuju')->get()->count();
        $k6fs   = skkapersmt7::where('puas_penilaian_kinerja_ai', '=', 'Setuju')->get()->count();
        $k6fks  = skkapersmt7::where('puas_penilaian_kinerja_ai', '=', 'Kurang Setuju')->get()->count();
        $k6fts  = skkapersmt7::where('puas_penilaian_kinerja_ai', '=', 'Tidak Setuju')->get()->count();
        $k6fsts = skkapersmt7::where('puas_penilaian_kinerja_ai', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6gss  = skkapersmt7::where('puas_pengelolaan_karir_ai', '=', 'Sangat Setuju')->get()->count();
        $k6gs   = skkapersmt7::where('puas_pengelolaan_karir_ai', '=', 'Setuju')->get()->count();
        $k6gks  = skkapersmt7::where('puas_pengelolaan_karir_ai', '=', 'Kurang Setuju')->get()->count();
        $k6gts  = skkapersmt7::where('puas_pengelolaan_karir_ai', '=', 'Tidak Setuju')->get()->count();
        $k6gsts = skkapersmt7::where('puas_pengelolaan_karir_ai', '=', 'Sangat Tidak Setuju')->get()->count();
        $k6hss  = skkapersmt7::where('rotasi_pegawai_ai', '=', 'Sangat Setuju')->get()->count();
        $k6hs   = skkapersmt7::where('rotasi_pegawai_ai', '=', 'Setuju')->get()->count();
        $k6hks  = skkapersmt7::where('rotasi_pegawai_ai', '=', 'Kurang Setuju')->get()->count();
        $k6hts  = skkapersmt7::where('rotasi_pegawai_ai', '=', 'Tidak Setuju')->get()->count();
        $k6hsts = skkapersmt7::where('rotasi_pegawai_ai', '=', 'Sangat Tidak Setuju')->get()->count();

        if($k6acount == 0){
            return view('admin.auditorerror.auditor2_7');
        }
        else {
            $k6a = array(
                'k6acount' => $k6acount,
                'k6ass' => $k6ass,
                'k6as' => $k6as,
                'k6aks' => $k6aks,
                'k6ats' => $k6ats,
                'k6asts' => $k6asts
            );


            $k6b = array(
                'k6bss' => $k6bss,
                'k6bs' => $k6bs,
                'k6bks' => $k6bks,
                'k6bts' => $k6bts,
                'k6bsts' => $k6bsts
            );


            $k6c = array(
                'k6css' => $k6css,
                'k6cs' => $k6cs,
                'k6cks' => $k6cks,
                'k6cts' => $k6cts,
                'k6csts' => $k6csts
            );


            $k6d = array(
                'k6dss' => $k6dss,
                'k6ds' => $k6ds,
                'k6dks' => $k6dks,
                'k6dts' => $k6dts,
                'k6dsts' => $k6dsts
            );


            $k6e = array(
                'k6ess' => $k6ess,
                'k6es' => $k6es,
                'k6eks' => $k6eks,
                'k6ets' => $k6ets,
                'k6ests' => $k6ests
            );


            $k6f = array(
                'k6fss' => $k6fss,
                'k6fs' => $k6fs,
                'k6fks' => $k6fks,
                'k6fts' => $k6fts,
                'k6fsts' => $k6fsts
            );


            $k6g = array(
                'k6gss' => $k6gss,
                'k6gs' => $k6gs,
                'k6gks' => $k6gks,
                'k6gts' => $k6gts,
                'k6gsts' => $k6gsts
            );


            $k6h = array(
                'k6hss' => $k6hss,
                'k6hs' => $k6hs,
                'k6hks' => $k6hks,
                'k6hts' => $k6hts,
                'k6hsts' => $k6hsts
            );

            $kategoria = ((($k6ass * 5) + ($k6as * 4) + ($k6aks * 3) + ($k6ats * 2) + ($k6asts * 1)) / ($k6acount * 5)) * 100;
            $kategorib = ((($k6bss * 5) + ($k6bs * 4) + ($k6bks * 3) + ($k6bts * 2) + ($k6bsts * 1)) / ($k6acount * 5)) * 100;
            $kategoric = ((($k6css * 5) + ($k6cs * 4) + ($k6cks * 3) + ($k6cts * 2) + ($k6csts * 1)) / ($k6acount * 5)) * 100;
            $kategorid = ((($k6dss * 5) + ($k6ds * 4) + ($k6dks * 3) + ($k6dts * 2) + ($k6dsts * 1)) / ($k6acount * 5)) * 100;
            $kategorie = ((($k6ess * 5) + ($k6es * 4) + ($k6eks * 3) + ($k6ets * 2) + ($k6ests * 1)) / ($k6acount * 5)) * 100;
            $kategorif = ((($k6fss * 5) + ($k6fs * 4) + ($k6fks * 3) + ($k6fts * 2) + ($k6fsts * 1)) / ($k6acount * 5)) * 100;
            $kategorig = ((($k6gss * 5) + ($k6gs * 4) + ($k6gks * 3) + ($k6gts * 2) + ($k6gsts * 1)) / ($k6acount * 5)) * 100;
            $kategorih = ((($k6hss * 5) + ($k6hs * 4) + ($k6hks * 3) + ($k6hts * 2) + ($k6hsts * 1)) / ($k6acount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie + $kategorif + $kategorig + $kategorih) / 8;

            $graf = grafiksmt::findOrFail(1);
            $graf->lain = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Lain - Lain')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya merasa puas dengan gaji saya saat ini.',
                    'Saya sangat menyukai pekerjaan saya saat ini.',
                    'Saya merasa tidak ingin pindah dari pekerjaan saya saat ini.',
                    'Saya lebih menyukai pekerjaan saya daripada teman lainnya.',
                    'Saya merasa yakin akan segera dipromosikan.',
                    'Saya puas terhadap penilaian kinerja Auditor Internal PLN.',
                    'Saya puas terhadap pengelolaan karir Auditor Internal PLN. ',
                    'Saya puas terhadap sistem rotasi pegawai di PLN. ',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, $kategorif, $kategorig, $kategorih, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_7', compact('k6a', 'k6b', 'k6c', 'k6d', 'k6e', 'k6f', 'k6g', 'k6h', 'chart'));
        }
    }

    public function indexAuditorsmt9() {
        $pilcount = skkapersmt9::count();
        $pil1ss  = skkapersmt9::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt9::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt9::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt9::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt9::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt9::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt9::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt9::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt9::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt9::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt9::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt9::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt9::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt9::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt9::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil4ss  = skkapersmt9::where('pil4', '=', 'Sangat Setuju')->get()->count();
        $pil4s   = skkapersmt9::where('pil4', '=', 'Setuju')->get()->count();
        $pil4ks  = skkapersmt9::where('pil4', '=', 'Kurang Setuju')->get()->count();
        $pil4ts  = skkapersmt9::where('pil4', '=', 'Tidak Setuju')->get()->count();
        $pil4sts = skkapersmt9::where('pil4', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil5ss  = skkapersmt9::where('pil5', '=', 'Sangat Setuju')->get()->count();
        $pil5s   = skkapersmt9::where('pil5', '=', 'Setuju')->get()->count();
        $pil5ks  = skkapersmt9::where('pil5', '=', 'Kurang Setuju')->get()->count();
        $pil5ts  = skkapersmt9::where('pil5', '=', 'Tidak Setuju')->get()->count();
        $pil5sts = skkapersmt9::where('pil5', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_9');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );


            $pil4 = array(
                'pil4ss' => $pil4ss,
                'pil4s' => $pil4s,
                'pil4ks' => $pil4ks,
                'pil4ts' => $pil4ts,
                'pil4sts' => $pil4sts
            );


            $pil5 = array(
                'pil5ss' => $pil5ss,
                'pil5s' => $pil5s,
                'pil5ks' => $pil5ks,
                'pil5ts' => $pil5ts,
                'pil5sts' => $pil5sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $kategorid = ((($pil4ss * 5) + ($pil4s * 4) + ($pil4ks * 3) + ($pil4ts * 2) + ($pil4sts * 1)) / ($pilcount * 5)) * 100;
            $kategorie = ((($pil5ss * 5) + ($pil5s * 4) + ($pil5ks * 3) + ($pil5ts * 2) + ($pil5sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid + $kategorie) / 5;

            $graf = grafiksmt::findOrFail(1);
            $graf->konsideran = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Gaya Kepemimpinan Konsideran')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Hubungan antara atasan dengan bawahan di tempat saya bekerja sangat dekat.',
                    'Di kantor saya, terdapat rasa saling percaya antara atasan dan bawahan.',
                    'Atasan di tempat saya bekerja menghargai gagasan dari bawahan.',
                    'Atasan di temapat saya bekerja menghargai kritikan dari bawahan.',
                    'Komunikasi antara atasan dan bawahan sangat terbuka dan menyenangkan.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, $kategorie, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_9', compact('pil1', 'pil2', 'pil3', 'pil4', 'pil5', 'chart'));
        }
    }

    public function indexAuditorsmt10() {
        $pilcount = skkapersmt10::count();
        $pil1ss  = skkapersmt10::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt10::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt10::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt10::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt10::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt10::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt10::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt10::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt10::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt10::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt10::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt10::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt10::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt10::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt10::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_10');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric) /3;

            $graf = grafiksmt::findOrFail(1);
            $graf->structure = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Gaya Kepemimpinan Structure')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Atasan di tempat saya bekerja mampu berkomunikasi dengan bawahan secara jelas dan efektif.',
                    'Atasan di tempat saya bekerja selalu memberikan arahan yang benar dalam mengerjakan tugas.',
                    'Atasan di tempat saya bekerja selalu menekankan pekerjaan dengan memfokuskan pada tujuan dan hasil.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_10', compact('pil1', 'pil2', 'pil3', 'chart'));
        }
    }

    public function indexAuditorsmt11() {
        $pilcount = skkapersmt11::count();
        $pil1ss  = skkapersmt11::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt11::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt11::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt11::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt11::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt11::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt11::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt11::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt11::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt11::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt11::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt11::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt11::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt11::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt11::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_11');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric) /3;

            $graf = grafiksmt::findOrFail(1);
            $graf->time = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Time Budget')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Keterbatasan alokasi waktu yang diberikan (budget time) merupakan beban yang berat bagi saya.',
                    'Keterbatasan alokasi waktu audit tidak mengurangi kualitas pekerjaan saya.',
                    'Keterbatasan alokasi waktu dapat mengganggu proses pekerjaan yang seharusnya saya lakukan.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_11', compact('pil1', 'pil2', 'pil3', 'chart'));
        }
    }

    public function indexAuditorsmt12() {
        $pilcount = skkapersmt12::count();
        $pil1ss  = skkapersmt12::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt12::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt12::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt12::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt12::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt12::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt12::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt12::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt12::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt12::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt12::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt12::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt12::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt12::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt12::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_12');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric) /3;

            $graf = grafiksmt::findOrFail(1);
            $graf->kinerja = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Kinerja')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya bekerja lebih baik (lebih efisien) dibandingkan rata-rata rekan kerja saya.',
                    'Saya menerima evaluasi kinerja yang memuaskan (melebihi standar yang ditetapkan perusahaan).',
                    'Pekerjaan saya sering dihargai/diapresiasi oleh auditee.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_12', compact('pil1', 'pil2', 'pil3', 'chart'));
        }
    }

    public function indexAuditorsmt13() {
        $pilcount = skkapersmt13::count();
        $pil1ss  = skkapersmt13::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt13::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt13::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt13::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt13::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt13::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt13::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt13::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt13::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt13::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt13::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt13::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt13::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt13::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt13::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil4ss  = skkapersmt13::where('pil4', '=', 'Sangat Setuju')->get()->count();
        $pil4s   = skkapersmt13::where('pil4', '=', 'Setuju')->get()->count();
        $pil4ks  = skkapersmt13::where('pil4', '=', 'Kurang Setuju')->get()->count();
        $pil4ts  = skkapersmt13::where('pil4', '=', 'Tidak Setuju')->get()->count();
        $pil4sts = skkapersmt13::where('pil4', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_13');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );


            $pil4 = array(
                'pil4ss' => $pil4ss,
                'pil4s' => $pil4s,
                'pil4ks' => $pil4ks,
                'pil4ts' => $pil4ts,
                'pil4sts' => $pil4sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $kategorid = ((($pil4ss * 5) + ($pil4s * 4) + ($pil4ks * 3) + ($pil4ts * 2) + ($pil4sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid) / 4;

            $graf = grafiksmt::findOrFail(1);
            $graf->intent = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Turnover Intention')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya ingin mencari pekerjaan selain profesi saya saat ini.',
                    'Saya ingin mencari pekerjaan selain pekerjaan saya saat ini.',
                    'Saya ingin pekerjaan lain dengan imbalan yang lebih tinggi.',
                    'Saya ingin mencari pekerjaan dengan jabatan yang lebih tinggi.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_13', compact('pil1', 'pil2', 'pil3', 'pil4', 'chart'));
        }
    }

    public function indexAuditorsmt14() {
        $pilcount = skkapersmt14::count();
        $pil1ss  = skkapersmt14::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt14::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt14::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt14::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt14::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt14::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt14::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt14::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt14::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt14::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt14::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt14::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt14::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt14::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt14::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_14');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric) /3;

            $graf = grafiksmt::findOrFail(1);
            $graf->promo = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Konflik Peran')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Kantor saya memberikan kesempatan promosi bagi setiap pegawai.',
                    'Promosi dapat meningkatkan pendapatan dan status sosial saya.',
                    'Di kantor saya ada prosedur yang jelas mengenai kenaikan jabatan.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_14', compact('pil1', 'pil2', 'pil3', 'chart'));
        }
    }

    public function indexAuditorsmt15() {
        $pilcount = skkapersmt15::count();
        $pil1ss  = skkapersmt15::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt15::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt15::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt15::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt15::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt15::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt15::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt15::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt15::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt15::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt15::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt15::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt15::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt15::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt15::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil4ss  = skkapersmt15::where('pil4', '=', 'Sangat Setuju')->get()->count();
        $pil4s   = skkapersmt15::where('pil4', '=', 'Setuju')->get()->count();
        $pil4ks  = skkapersmt15::where('pil4', '=', 'Kurang Setuju')->get()->count();
        $pil4ts  = skkapersmt15::where('pil4', '=', 'Tidak Setuju')->get()->count();
        $pil4sts = skkapersmt15::where('pil4', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_15');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );


            $pil4 = array(
                'pil4ss' => $pil4ss,
                'pil4s' => $pil4s,
                'pil4ks' => $pil4ks,
                'pil4ts' => $pil4ts,
                'pil4sts' => $pil4sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $kategorid = ((($pil4ss * 5) + ($pil4s * 4) + ($pil4ks * 3) + ($pil4ts * 2) + ($pil4sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid) / 4;

            $graf = grafiksmt::findOrFail(1);
            $graf->komunikasi = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Komunikasi')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Komunikasi antar atasan dan bawahan di kantor saya menyenangkan.',
                    'Komunikasi antar rekan kerja di kantor saya menyenangkan.',
                    'Pendelegasian kewenangan dan tanggung jawab di kantor ini jelas bagi saya.',
                    'Goals / tujuan (sasaran) yang ingin dituju oleh kantor ini jelas bagi saya.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_15', compact('pil1', 'pil2', 'pil3', 'pil4', 'chart'));
        }
    }

    public function indexAuditorsmt16() {
        $pilcount = skkapersmt16::count();
        $pil1ss  = skkapersmt16::where('pil1', '=', 'Sangat Setuju')->get()->count();
        $pil1s   = skkapersmt16::where('pil1', '=', 'Setuju')->get()->count();
        $pil1ks  = skkapersmt16::where('pil1', '=', 'Kurang Setuju')->get()->count();
        $pil1ts  = skkapersmt16::where('pil1', '=', 'Tidak Setuju')->get()->count();
        $pil1sts = skkapersmt16::where('pil1', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil2ss  = skkapersmt16::where('pil2', '=', 'Sangat Setuju')->get()->count();
        $pil2s   = skkapersmt16::where('pil2', '=', 'Setuju')->get()->count();
        $pil2ks  = skkapersmt16::where('pil2', '=', 'Kurang Setuju')->get()->count();
        $pil2ts  = skkapersmt16::where('pil2', '=', 'Tidak Setuju')->get()->count();
        $pil2sts = skkapersmt16::where('pil2', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil3ss  = skkapersmt16::where('pil3', '=', 'Sangat Setuju')->get()->count();
        $pil3s   = skkapersmt16::where('pil3', '=', 'Setuju')->get()->count();
        $pil3ks  = skkapersmt16::where('pil3', '=', 'Kurang Setuju')->get()->count();
        $pil3ts  = skkapersmt16::where('pil3', '=', 'Tidak Setuju')->get()->count();
        $pil3sts = skkapersmt16::where('pil3', '=', 'Sangat Tidak Setuju')->get()->count();
        $pil4ss  = skkapersmt16::where('pil4', '=', 'Sangat Setuju')->get()->count();
        $pil4s   = skkapersmt16::where('pil4', '=', 'Setuju')->get()->count();
        $pil4ks  = skkapersmt16::where('pil4', '=', 'Kurang Setuju')->get()->count();
        $pil4ts  = skkapersmt16::where('pil4', '=', 'Tidak Setuju')->get()->count();
        $pil4sts = skkapersmt16::where('pil4', '=', 'Sangat Tidak Setuju')->get()->count();

        if($pilcount == 0){
            return view('admin.auditorerror.auditor2_16');
        }
        else {
            $pil1 = array(
                'pilcount' => $pilcount,
                'pil1ss' => $pil1ss,
                'pil1s' => $pil1s,
                'pil1ks' => $pil1ks,
                'pil1ts' => $pil1ts,
                'pil1sts' => $pil1sts
            );


            $pil2 = array(
                'pil2ss' => $pil2ss,
                'pil2s' => $pil2s,
                'pil2ks' => $pil2ks,
                'pil2ts' => $pil2ts,
                'pil2sts' => $pil2sts
            );


            $pil3 = array(
                'pil3ss' => $pil3ss,
                'pil3s' => $pil3s,
                'pil3ks' => $pil3ks,
                'pil3ts' => $pil3ts,
                'pil3sts' => $pil3sts
            );


            $pil4 = array(
                'pil4ss' => $pil4ss,
                'pil4s' => $pil4s,
                'pil4ks' => $pil4ks,
                'pil4ts' => $pil4ts,
                'pil4sts' => $pil4sts
            );

            $kategoria = ((($pil1ss * 5) + ($pil1s * 4) + ($pil1ks * 3) + ($pil1ts * 2) + ($pil1sts * 1)) / ($pilcount * 5)) * 100;
            $kategorib = ((($pil2ss * 5) + ($pil2s * 4) + ($pil2ks * 3) + ($pil2ts * 2) + ($pil2sts * 1)) / ($pilcount * 5)) * 100;
            $kategoric = ((($pil3ss * 5) + ($pil3s * 4) + ($pil3ks * 3) + ($pil3ts * 2) + ($pil3sts * 1)) / ($pilcount * 5)) * 100;
            $kategorid = ((($pil4ss * 5) + ($pil4s * 4) + ($pil4ks * 3) + ($pil4ts * 2) + ($pil4sts * 1)) / ($pilcount * 5)) * 100;
            $av = ($kategoria + $kategorib + $kategoric + $kategorid) / 4;

            $graf = grafiksmt::findOrFail(1);
            $graf->cworker = $av;
            $graf->save();

            $chart = Charts::create('bar', 'highcharts')
                ->title('Co Worker')
                ->elementLabel('Presentase (%)')
                ->labels([
                    'Saya menikmati bekerja dengan rekan kerja saya dikantor ini.',
                    'Saya dapat bekerja sama dengan baik dengan rekan kerja saya di kantor ini.',
                    'Saya suka bekerja sama dengan rekan kerja saya di kantor ini.',
                    'Saya tidak harus bekerja dengan keras karena kemampuan rekan kerja saya sudah memadai.',
                    '',
                    'Presentase per Kategori (%)'])
                ->values([$kategoria, $kategorib, $kategoric, $kategorid, 0, $av])
                ->dimensions(1000, 500)
                ->responsive(false);

            return view('admin.auditor2_16', compact('pil1', 'pil2', 'pil3', 'pil4', 'chart'));
        }
    }

    public function indexAuditorsmt8() {
        $data = skkapersmt8::all();
        $count = 0;

        $graf = grafiksmt::findOrFail(1);
        if($graf->pelatihan + $graf->organisasional + $graf->profesional + $graf->motivasi + $graf->konsideran + $graf->structure + $graf->time + $graf->kinerja + $graf->intent + $graf->promo + $graf->komunikasi + $graf->cworker == 0){
            $graf->total = 0;
        }
        else{
            $graf->total = ($graf->pelatihan + $graf->organisasional + $graf->profesional + $graf->motivasi + $graf->konsideran + $graf->structure + $graf->time + $graf->kinerja + $graf->intent + $graf->promo + $graf->komunikasi + $graf->cworker)/12;
        }
        $graf->save();

        $hasil = grafiksmt::findOrFail(1);

        $chart = Charts::create('bar', 'highcharts')
            ->title('Persentase Total')
            ->elementLabel('Presentase (%)')
            ->labels([
                'Pelatihan dan Kompetensi',
                'Komitmen Organisasional',
                'Komitmen Profesional',
                'Motivasi Kerja',
                'Gaya Kepemimpiman Konsideran',
                'Gaya Kepemimpiman Structure',
                'Time Budget',
                'Kinerja',
                'Turnover Intention',
                'Promosi',
                'Komunikasi',
                'Co Worker',
                '',
                'Presentase Total (%)'])
            ->values([$hasil->pelatihan, $hasil->organisasional, $hasil->profesional, $hasil->motivasi, $graf->konsideran, $graf->structure, $graf->time, $graf->kinerja, $graf->intent, $graf->promo, $graf->komunikasi, $graf->cworker, 0, $hasil->total])
            ->dimensions(1000, 500)
            ->responsive(false);

        return view('admin.auditor2_8', compact('data', 'count', 'hasil', 'chart'));
    }
}
