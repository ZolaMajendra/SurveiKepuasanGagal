<?php

namespace App\Http\Controllers;

use App\auditee1;
use App\idauditor;
use App\idauditorsmt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ToExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function IdAuditee(){
        $identitas = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->select(
                'users.id',
                'users.username',
                'identitas_auditee.unit_pln',
                'identitas_auditee.tahun'
            )->get();

        if(is_null($identitas)){
            Session::flash('flash_message', 'Tidak ada data');
        }
        else{
            foreach ($identitas as $id){
                $identitasArray[] = array(
                    $id->id,
                    $id->username,
                    $id->unit_pln,
                    $id->tahun
                );
            }

            Excel::create('Auditee', function ($excel) use($identitasArray) {
                $excel->setTitle('Identitas');
                $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
                $excel->setDescription('Auditee File');

                $excel->sheet('Identitas', function ($sheet) use($identitasArray){
                    $heading = [
                        'Id',
                        'Username',
                        'Unit PLN',
                        'Tahun'
                    ];
                    $sheet->fromArray($identitasArray, null, 'A1', false, false);
                    $sheet->prependRow(1, $heading);
                    $sheet->cell('A1:G1', function ($cell) {
                        $cell->setFontWeight('bold');
                    });
                });
            })->download('xlsx');
        }
    }

    public function Auditee2(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('persepsi_manajemen_terhadap_spi', 'persepsi_manajemen_terhadap_spi.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'persepsi_manajemen_terhadap_spi.kategori1a',
                'persepsi_manajemen_terhadap_spi.kategori1b',
                'persepsi_manajemen_terhadap_spi.kategori1c',
                'persepsi_manajemen_terhadap_spi.kategori1d'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->kategori1a,
                $cont->kategori1b,
                $cont->kategori1c,
                $cont->kategori1d
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Kategori 1');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Kategori 1', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'SPI sebagai bagian yang penting dalam tim manajemen auditee / unit operasional',
                    'SPI pada posisi yang independen dalam menjalankan tugasnya',
                    'Auditor berhak mendapatkan kebebasan dan akses tidak terbatas terhadap catatan, informasi, lokasi, dan karyawan dalam ruang lingkup penugasan mereka',
                    'Kegiatan audit internal mempromosikan orientasi kualitas kerja yang baik pada auditee'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:F1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function Auditee3(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('staff_audit_internal', 'staff_audit_internal.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'staff_audit_internal.kategori2a',
                'staff_audit_internal.kategori2b',
                'staff_audit_internal.kategori2c',
                'staff_audit_internal.kategori2d',
                'staff_audit_internal.kategori2e',
                'staff_audit_internal.kategori2f',
                'staff_audit_internal.kategori2g',
                'staff_audit_internal.kategori2h',
                'staff_audit_internal.kategori2i',
                'staff_audit_internal.kategori2j',
                'staff_audit_internal.kategori2k',
                'staff_audit_internal.kategori2l',
                'staff_audit_internal.kategori2m',
                'staff_audit_internal.kategori2n',
                'staff_audit_internal.kategori2o',
                'staff_audit_internal.kategori2p',
                'staff_audit_internal.kategori2q',
                'staff_audit_internal.kategori2r',
                'staff_audit_internal.kategori2s',
                'staff_audit_internal.kategori2t',
                'staff_audit_internal.kategori2u',
                'staff_audit_internal.kategori2v',
                'staff_audit_internal.kategori2w',
                'staff_audit_internal.kategori2x'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->kategori2a,
                $cont->kategori2b,
                $cont->kategori2c,
                $cont->kategori2d,
                $cont->kategori2e,
                $cont->kategori2f,
                $cont->kategori2g,
                $cont->kategori2h,
                $cont->kategori2i,
                $cont->kategori2j,
                $cont->kategori2k,
                $cont->kategori2l,
                $cont->kategori2m,
                $cont->kategori2n,
                $cont->kategori2o,
                $cont->kategori2p,
                $cont->kategori2q,
                $cont->kategori2r,
                $cont->kategori2s,
                $cont->kategori2t,
                $cont->kategori2u,
                $cont->kategori2v,
                $cont->kategori2w,
                $cont->kategori2x
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Kategori 2');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Kategori 2', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:Z1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function Auditee4(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('ruang_lingkup_pekerjaan_audit', 'ruang_lingkup_pekerjaan_audit.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'ruang_lingkup_pekerjaan-audit.kategori3a',
                'ruang_lingkup_pekerjaan-audit.kategori3b',
                'ruang_lingkup_pekerjaan-audit.kategori3c',
                'ruang_lingkup_pekerjaan-audit.kategori3d'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->kategori3a,
                $cont->kategori3b,
                $cont->kategori3c,
                $cont->kategori3d
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Kategori 3');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Kategori 3', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Pemilihan area atau topik yang penting untuk diaudit sudah tepat',
                    'Auditor mempertimbangkan saran dalam menentukan area atau topik sesuai dengan kebutuhan perbaikan kinerja operasional unit',
                    'Pemberitahuan pra-audit terkait maksud dan lingkup penugasan sudah cukup jelas dan dapat dipahami',
                    'Auditor sudah mempertimbangkan tanggapan auditee tentang area of improvement yang ditemukan dan rekomendasi yang akan diberikan saat exit meeting'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:F1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function Auditee5(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('pelaksanaan_audit', 'pelaksanaan_audit.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'pelaksanaan_audit.kategori4a',
                'pelaksanaan_audit.kategori4b',
                'pelaksanaan_audit.kategori4c',
                'pelaksanaan_audit.kategori4d',
                'pelaksanaan_audit.kategori4e',
                'pelaksanaan_audit.kategori4f'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->kategori4a,
                $cont->kategori4b,
                $cont->kategori4c,
                $cont->kategori4d,
                $cont->kategori4e,
                $cont->kategori4f
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Kategori 4');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Kategori 4', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Auditor menyertakan surat tugas dalam pelaksanaan audit',
                    'Auditor menyertakan atau menunjukkan surat permintaan data / dokumen dalam meminta data / dokumen',
                    'Auditor melaksanakan final mapping end to end dengan auditee',
                    'Auditor menyampaikan secara lengkap dan jelas kegiatan audit pada entry meeting',
                    'Auditor menyampaikan secara lengkap dan jelas laporan hasil audit pada exit meeting',
                    'Auditor memonitoring tindak lanjut atas rekomendasi yang diberikan'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:H1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function Auditee6(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('proses_dan_laporan_audit', 'proses_dan_laporan_audit.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'proses_dan_laporan_audit.kategori5a',
                'proses_dan_laporan_audit.kategori5b',
                'proses_dan_laporan_audit.kategori5c',
                'proses_dan_laporan_audit.kategori5d',
                'proses_dan_laporan_audit.kategori5e'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->kategori5a,
                $cont->kategori5b,
                $cont->kategori5c,
                $cont->kategori5d,
                $cont->kategori5e
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Kategori 5');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Kategori 5', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Auditor membeikan umpan balik kepada auditee atas isu – isu yang muncul',
                    'Waktu pelaksanaan audit berjalan dengan efektif',
                    'Laporan yang dihasilkan akurat, lengkap, objektif, meyakinkan, jelas, ringkas, bebas dari bahasa atau istilah-istilah yang menimbulkan multi tafsir, serta tepat waktu',
                    'Laporan mengemukakan penjelasan atau tanggapan auditee tentang hasil audit',
                    'Laporan hasil audit memuat temuan dan simpulan hasil audit secara objektif, serta rekomendasi yang konstruktif'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:G1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function tAuditee(){
        $content = auditee1::join('users', 'users.id', '=', 'identitas_auditee.user_id')
            ->join('nilai_tambah', 'nilai_tambah.identitas_auditee', '=', 'identitas_auditee.id_identitas_auditee')
            ->select(
                'users.id',
                'users.username',
                'nilai_tambah.nilaia',
                'nilai_tambah.nilaib',
                'nilai_tambah.nilaic'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->nilaia,
                $cont->nilaib,
                $cont->nilaic
            );
        }

        Excel::create('Auditee', function ($excel) use($contentArray) {
            $excel->setTitle('Nilai Tambah');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('Auditee File');

            $excel->sheet('Nilai Tambah', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Komentar Tentang Layanan Audit yang Belum Optimal',
                    'Komentar Tentang Layanan Audit yang Tidak Perlu Dilakukan',
                    'Komentar Bebas'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function IdAuditorPo(){
        $identitas = idauditor::join('users', 'users.id', '=', 'identitas.user_id')
            ->select(
                'users.id',
                'users.username',
                'identitas.unit',
                'identitas.up_audit',
                'identitas.tahun'
            )->get();

        if(is_null($identitas)){
            Session::flash('flash_message', 'Tidak ada data');
        }
        else{
            foreach ($identitas as $id){
                $identitasArray[] = array(
                    $id->id,
                    $id->username,
                    $id->unit,
                    $id->up_audit,
                    $id->tahun
                );
            }

            Excel::create('AuditorPerPo', function ($excel) use($identitasArray) {
                $excel->setTitle('Identitas');
                $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
                $excel->setDescription('AuditorPerPo File');

                $excel->sheet('Identitas', function ($sheet) use($identitasArray){
                    $heading = [
                        'Id',
                        'Username',
                        'Kantor SPI PLN Regional',
                        'Unit PLN',
                        'Tahun'];
                    $sheet->fromArray($identitasArray, null, 'A1', false, false);
                    $sheet->prependRow(1, $heading);
                    $sheet->cell('A1:H1', function ($cell) {
                        $cell->setFontWeight('bold');
                    });
                });
            })->download('xlsx');
        }
    }

    public function sblmAuditorPo(){
        $content = idauditor::join('users', 'users.id', '=', 'identitas.user_id')
            ->join('sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi', 'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.identitas', '=', 'identitas.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.minta_data_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.minta_data_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.mslh_uang_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.mslh_uang_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.sppd_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.pembagian_ruang_lingkup_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.pembagian_ruang_lingkup_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.penentuan_kriteria_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.penentuan_kriteria_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.ruang_lingkup_terbebani_sblm_audit_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.ruang_lingkup_terbebani_sblm_audit_isian',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.ruang_lingkup_spesifik_sblm_audit',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.profile_risk_sblm_audit',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.knowledge_sharing',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.apqc_pilihan',
                'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi.apqc_isian'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->erbas_sblm_audit_pilihan,
                $cont->minta_data_sblm_audit_pilihan,
                $cont->mslh_uang_sblm_audit_pilihan,
                $cont->sppd_sblm_audit_pilihan,
                $cont->pembagian_ruang_lingkup_sblm_audit_pilihan,
                $cont->penentuan_kriteria_sblm_audit_pilihan,
                $cont->ruang_lingkup_terbebani_sblm_audit_pilihan,
                $cont->ruang_lingkup_spesifik_sblm_audit,
                $cont->profile_risk_sblm_audit,
                $cont->knowledge_sharing,
                $cont->apqc_pilihan
            );
            $isiArray[] = array(
                $cont->id,
                $cont->username,
                $cont->erbas_sblm_audit_isian,
                $cont->minta_data_sblm_audit_isian,
                $cont->mslh_uang_sblm_audit_isian,
                $cont->pembagian_ruang_lingkup_sblm_audit_isian,
                $cont->penentuan_kriteria_sblm_audit_isian,
                $cont->ruang_lingkup_terbebani_sblm_audit_isian,
                $cont->apqc_isian
            );
        }

        Excel::create('AuditorPerPo', function ($excel) use($contentArray, $isiArray) {
            $excel->setTitle('Sebelum Audit');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerPo File');

            $excel->sheet('Sblm Audit Pilihan', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Apakah tidak terdapat kendala mengenai penggunaan eRBAS sebelum pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah tidak terdapat kendala terkait permintaan data ke auditee sebelum pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah anda tidak mengalami masalah keuangan untuk melaksankan kegiatan audit dan konsultasi?',
                    'Apakah anda puas terkait ketepatan waktu mngenai penerimaan uang lump sum SPPD sebelum keberangkatan anda untuk melakukan kagiatan audit dan konsultasi?',
                    'Apakah pembagian ruang lingkup kegiatan audit dan konsultasi telah sesuai dengan kemampuan yang anda miliki?',
                    'Apakah anda tidak mengalami kesulitan dalam penentuan kriteria ruang lingkup kegiatan audit dan konsultasi?',
                    'Apakah anda tidak terbebani dengan pembagian ruang lingkup untuk kegiatan audit dan konsultasi?',
                    'Apakah penentuan ruang lingkup audit sudah spesifik sehingga tidak menyebabkan auditor kurang fokus selama pelaksanaan audit?',
                    'Dalam pembuatan PKA, apakah profile risk area sudah tersedia?',
                    'Apakah ketua tim sudah melakukan knowledge sharing sebelum pelaksanaan kegiatan audit dan konsultasi yang berhubungan dengan ruang lingkup pemeriksaaan?',
                    'Apakah APQC sudah mencakup semua level aktifitas proses bisnis PLN?'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:M1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });

            $excel->sheet('Sblm Audit Isian', function ($sheet) use($isiArray){
                $heading = [
                    'Id',
                    'Username',
                    'Isian untuk pilihan no 1',
                    'Isian untuk pilihan no 2',
                    'Isian untuk pilihan no 3',
                    'Isian untuk pilihan no 5',
                    'Isian untuk pilihan no 6',
                    'Isian untuk pilihan no 7',
                    'Isian untuk pilihan no 11'
                ];
                $sheet->fromArray($isiArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:I1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function slmAuditorPo(){
        $content = idauditor::join('users', 'users.id', '=', 'identitas.user_id')
            ->join('selama_pelaksanaan_kegiatan_audit_dan_konsultasi', 'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.identitas', '=', 'identitas.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.sarana_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.sarana_selama_audit_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.minta_data_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.minta_data_selama_audit_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.kelengkapan_data_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.profile_risk_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_selama_audit_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.uji_petik_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.uji_petik_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.kooperatif_selama_audit_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.kooperatif_selama_audit_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.jumlah_sdm',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.kemampuan_sdm',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.hotel_pilihan',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.hotel_isian',
                'selama_pelaksanaan_kegiatan_audit_dan_konsultasi.sulit_ditemui_selam_audit_pilihan'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->sarana_selama_audit_pilihan,
                $cont->minta_data_selama_audit_pilihan,
                $cont->kelengkapan_data_selama_audit_pilihan,
                $cont->profile_risk_selama_audit_pilihan,
                $cont->erbas_selama_audit_pilihan,
                $cont->uji_petik_pilihan,
                $cont->kooperatif_selama_audit_pilihan,
                $cont->jumlah_sdm,
                $cont->kemampuan_sdm,
                $cont->hotel_pilihan,
                $cont->sulit_ditemui_selam_audit_pilihan
            );
            $isiArray[] = array(
                $cont->id,
                $cont->username,
                $cont->sarana_selama_audit_isian,
                $cont->minta_data_selama_audit_isian,
                $cont->erbas_selama_audit_isian,
                $cont->uji_petik_isian,
                $cont->kooperatif_selama_audit_isian,
                $cont->hotel_isian,
            );
        }

        Excel::create('AuditorPerPo', function ($excel) use($contentArray, $isiArray) {
            $excel->setTitle('Selama Audit');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerPo File');

            $excel->sheet('Selama Audit Pilihan', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Apakah anda tidak mengalami kendala terkait sarana prasarana untuk melakukan kegiatan audit dan konsultasi?',
                    'Apakah anda tidak mengalami kendala terkait permintaan data ke auditee selama pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah data yang diberikan auditee sudah sesuai dengan apa yang diminta oleh auditor? (dilihat dari segi kelengkapan data)',
                    'Apakah profile risk auditee sudah tepat sehingga sasaran kegiatan audit dan konsultasi tepat sasaran?',
                    'Apakah anda tidak mengalami kendala mengenai penggunaan eRBAS selama pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah tidak terdapat kendala terkait pelaksanaan uji petik?',
                    'Apakah auditee kooperatif selama pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi jumlah SDM)',
                    'Apakah SDM sudah memenuhi untuk melakukan kegiatan audit dan konsultasi? (Dilihat dari segi kemampuan SDM)',
                    'Apakah tidak terdapat kendala terkait pencarian hotel selama pelaksanaan kegiatan audit dan konsultasi?',
                    'Apakah auditee tidak sulit ditemui selama kegiatan audit dan konsultasi?'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:M1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });

            $excel->sheet('Selama Audit Isian', function ($sheet) use($isiArray){
                $heading = [
                    'Id',
                    'Username',
                    'Isian untuk pilihan no 1',
                    'Isian untuk pilihan no 2',
                    'Isian untuk pilihan no 5',
                    'Isian untuk pilihan no 6',
                    'Isian untuk pilihan no 7',
                    'Isian untuk pilihan no 10'
                ];
                $sheet->fromArray($isiArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:H1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function ssdAuditorPo(){
        $content = idauditor::join('users', 'users.id', '=', 'identitas.user_id')
            ->join('setelah_pelaksanaan_kegiatan_audit_dan_konsultasi', 'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.identitas', '=', 'identitas.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_setelah_audit_pilihan',
                'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.erbas_setelah_audit_isian',
                'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.rekomendasi',
                'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.evidence',
                'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi.sppd_setelah_audit'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->erbas_setelah_audit_pilihan,
                $cont->rekomendasi,
                $cont->evidence,
                $cont->sppd_setelah_audit
            );
            $isiArray[] = array(
                $cont->id,
                $cont->username,
                $cont->erbas_setelah_audit_isian
            );
        }

        Excel::create('AuditorPerPo', function ($excel) use($contentArray, $isiArray) {
            $excel->setTitle('Sesudah Audit');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerPo File');

            $excel->sheet('Sesudah Audit Pilihan', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Apakah tidak terdapat kendala mengenai penggunaan eRBAS untuk pemantuan tindak lanjut rekomendasi?',
                    'Apakah rekomendasi anda ditindaklanjuti oleh auditee?',
                    'Apakah evidence yang dibuat oleh auditee mengenai tindak lanjut rekomendasi telah sesuai?',
                    'Apakah anda puas terkait ketepatan waktu mengenai penerimaan uang reimburse SPPD setelah anda melakukan kagiatan audit dan konsultasi?'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:F1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });

            $excel->sheet('Sesudah Audit Isian', function ($sheet) use($isiArray){
                $heading = [
                    'Id',
                    'Username',
                    'Isian untuk pilihan no 1'
                ];
                $sheet->fromArray($isiArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:C1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function ksAuditorPo(){
        $content = idauditor::join('users', 'users.id', '=', 'identitas.user_id')
            ->join('pertanyaan_terbuka', 'pertanyaan_terbuka.identitas', '=', 'identitas.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'pertanyaan_terbuka.soal1',
                'pertanyaan_terbuka.soal2',
                'pertanyaan_terbuka.soal3',
                'pertanyaan_terbuka.soal4'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->soal1,
                $cont->soal2,
                $cont->soal3,
                $cont->soal4
            );
        }

        Excel::create('AuditorPerPo', function ($excel) use($contentArray) {
            $excel->setTitle('Pertanyaan Terbuka');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerPo File');

            $excel->sheet('Pertanyaan Terbuka', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Pertanyaan 1',
                    'Pertanyaan 2',
                    'Pertanyaan 3',
                    'Pertanyaan 4'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:F1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function IdAuditorSmt(){
        $identitas = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->select(
                'users.id',
                'users.username',
                'identitaspersmt.unit',
                'identitaspersmt.semester',
                'identitaspersmt.tahun'
            )->get();

        if(is_null($identitas)){
            Session::flash('flash_message', 'Tidak ada data');
        }
        else{
            foreach ($identitas as $id){
                $identitasArray[] = array(
                    $id->id,
                    $id->username,
                    $id->unit,
                    $id->semester,
                    $id->tahun
                );
            }

            Excel::create('AuditorPerSmt', function ($excel) use($identitasArray) {
                $excel->setTitle('Identitas');
                $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
                $excel->setDescription('AuditorPerSmt File');

                $excel->sheet('Identitas', function ($sheet) use($identitasArray){
                    $heading = ['Id', 'Username', 'Unit', 'Semester', 'Tahun'];
                    $sheet->fromArray($identitasArray, null, 'A1', false, false);
                    $sheet->prependRow(1, $heading);
                    $sheet->cell('A1:H1', function ($cell) {
                        $cell->setFontWeight('bold');
                    });
                });
            })->download('xlsx');
        }
    }

    public function cont1AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('pelatihan_kompetensi', 'pelatihan_kompetensi.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'pelatihan_kompetensi.jenjang_pendidikan',
                'pelatihan_kompetensi.pelatihan_khusus',
                'pelatihan_kompetensi.seminar_diluar_pln',
                'pelatihan_kompetensi.kemampuan_masalah',
                'pelatihan_kompetensi.kemampuan_rekomendasi',
                'pelatihan_kompetensi.kerjasama_tim'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->jenjang_pendidikan,
                $cont->pelatihan_khusus,
                $cont->seminar_diluar_pln,
                $cont->kemampuan_masalah,
                $cont->kemampuan_rekomendasi,
                $cont->kerjasama_tim
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Pelatihan Kompetensi');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Pelatihan Kompetensi', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya diberikan kesempatan oleh PLN untuk melanjutkan jenjang pendidikan.',
                    'Saya merasa pelatihan khusus untuk penugasan kegiatan audit dan konsultasi sudah memadai.',
                    'Saya diberikan kesempatan oleh PLN untuk mengikuti berbagai seminar diluar PLN.',
                    'Saya dapat menyelesaikan masalah dalam kegiatan audit dan konsultasi dengan kemampuan yang saya miliki.',
                    'Saya memiliki kemampuan untuk mengkomunikasikan rekomendasi hasil kegiatan audit dan konsultasi.',
                    'Saya memiliki kemampuan kerjasama yang baik dalam tim.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:H1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont2AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('komitmen_organisasional', 'komitmen_organisasional.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'komitmen_organisasional.emosional',
                'komitmen_organisasional.berarti',
                'komitmen_organisasional.bagian',
                'komitmen_organisasional.masalah_pln',
                'komitmen_organisasional.batas_normal',
                'komitmen_organisasional.tinggal_komitmen',
                'komitmen_organisasional.loyalitas'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->emosional,
                $cont->berarti,
                $cont->bagian,
                $cont->masalah_pln,
                $cont->batas_normal,
                $cont->tinggal_komitmen,
                $cont->loyalitas
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Komitmen Organisasional');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Komitmen Organisasional', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya merasa terikat secara emosional dengan PLN.',
                    'PLN sangat berarti bagi saya.',
                    'Saya merasa menjadi bagian dari PLN.',
                    'Saya merasa masalah PLN seperti masalah saya.',
                    'Saya mau berusaha diatas batas normal untuk memajukan PLN.',
                    'Saat ini saya tetap tinggal di PLN karena komitmen terhadap PLN.',
                    'Alasan utama saya tetap bekerja di PLN adalah karena loyalitas terhadap PLN.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:I1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont3AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('komitemen_profesional', 'komitemen_profesional.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'komitemen_profesional.luar_biasa_kesuksesan_ai',
                'komitemen_profesional.saya_ai_pln',
                'komitemen_profesional.inspirasi_kerja_terbaik',
                'komitemen_profesional.perkembangan_ai',
                'komitemen_profesional.ai_profesi_terbaik'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->luar_biasa_kesuksesan_ai,
                $cont->saya_ai_pln,
                $cont->inspirasi_kerja_terbaik,
                $cont->perkembangan_ai,
                $cont->ai_profesi_terbaik
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Komitmen Profesional');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Komitmen Profesional', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya ingin melakukan usaha yang luar biasa melebihi yang diharapkan demi kesuksesan/keberhasilan Auditor Internal PLN.',
                    'Saya bangga memberitahu orang lain bahwa saya adalah Auditor Internal PLN.',
                    'Menjadi Auditor Internal PLN sangat menginspirasi saya untuk bekerja dengan sebaik-baiknya.',
                    'Saya sangat peduli dengan perkembangan auditor internal di Indonesia.',
                    'Bagi saya, menjadi Auditor Internal PLN adalah profesi terbaik dibandingkan profesi lainnya.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:G1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont4AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('motivasi_kerja', 'motivasi_kerja.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'motivasi_kerja.maksimal_hasil_terbaik',
                'motivasi_kerja.tugas_tepat_waktu',
                'motivasi_kerja.dekat_ke_atasan',
                'motivasi_kerja.saran_membangun',
                'motivasi_kerja.terbaik_daripada_rekan',
                'motivasi_kerja.evaluasi_selalu_memuaskan',
                'motivasi_kerja.respect_pada_saya',
                'motivasi_kerja.hubungan_baik_auditee'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->maksimal_hasil_terbaik,
                $cont->tugas_tepat_waktu,
                $cont->dekat_ke_atasan,
                $cont->saran_membangun,
                $cont->terbaik_daripada_rekan,
                $cont->evaluasi_selalu_memuaskan,
                $cont->respect_pada_saya,
                $cont->hubungan_baik_auditee
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Motivasi Kerja');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Motivasi Kerja', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya selalu berusaha semaksimal mungkin agar mendapatkan hasil terbaik.',
                    'Saya selalu menyelesaikan pekerjaan yang diberikan atasan tepat waktu.',
                    'Saya berusaha lebih dekat dengan atasan agar komunikasi berjalan baik.',
                    'Saya mendapatkan saran yang membangun untuk mendapatkan hasil kerja maksimal.',
                    'Saya selalu berusaha untuk menjadi lebih baik daripada rekan kerja saya.',
                    'Hasil evaluasi kerja saya selalu memuaskan.',
                    'Pencapaian kerja saya di tempat saya bekerja membuat orang respect kepada saya.',
                    'Saya selalu berusaha menjaga hubungan baik dengan auditee.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:J1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont5AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('konflik_peran', 'konflik_peran.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'konflik_peran.tidak_melanggar_aturan',
                'konflik_peran.kesesuaian_tugas',
                'konflik_peran.diterima_wajar',
                'konflik_peran.tugas_tidak_wajar',
                'konflik_peran.sd_cukup'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->tidak_melanggar_aturan,
                $cont->kesesuaian_tugas,
                $cont->diterima_wajar,
                $cont->tugas_tidak_wajar,
                $cont->sd_cukup
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Konflik Peran');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Konflik Peran', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya tidak pernah melanggar peraturan atau kebijakan untuk menyelesaikan suatu penugasan.',
                    'Saya menerima beberapa permintaan untuk melakukan suatu pekerjaan yang saling bersesuaian satu sama lain.',
                    'Saya melakukan hal-hal yang dapat diterima oleh seseorang ataupun orang lain.',
                    'Saya melaksanakan hal-hal yang tidak harus dilakukan seperti biasanya.',
                    'Saya menerima penugasan didukung material dan sumber daya yang cukup untuk melaksanakannya.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:G1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont6AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('lain_lain', 'lain_lain.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'lain_lain.puas_gaji',
                'lain_lain.suka_pekerjaan',
                'lain_lain.tidak_ingin_pindah',
                'lain_lain.suka_daripada_teman',
                'lain_lain.promosi',
                'lain_lain.puas_penilaian_kinerja_ai',
                'lain_lain.puas_pengelolaan_karir_ai',
                'lain_lain.rotasi_pegawai_ai'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->puas_gaji,
                $cont->suka_pekerjaan,
                $cont->tidak_ingin_pindah,
                $cont->suka_daripada_teman,
                $cont->promosi,
                $cont->puas_penilaian_kinerja_ai,
                $cont->puas_pengelolaan_karir_ai,
                $cont->rotasi_pegawai_ai
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Lain - Lain');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Lain - Lain', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya merasa puas dengan gaji saya saat ini.',
                    'Saya sangat menyukai pekerjaan saya saat ini.',
                    'Saya merasa tidak ingin pindah dari pekerjaan saya saat ini.',
                    'Saya lebih menyukai pekerjaan saya daripada teman lainnya.',
                    'Saya merasa yakin akan segera dipromosikan.',
                    'Saya puas terhadap penilaian kinerja Auditor Internal PLN.',
                    'Saya puas terhadap pengelolaan karir Auditor Internal PLN.',
                    'Saya puas terhadap sistem rotasi pegawai di PLN.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:J1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont9AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('konsideran', 'konsideran.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'konsideran.pil1',
                'konsideran.pil2',
                'konsideran.pil3',
                'konsideran.pil4',
                'konsideran.pil5'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
                $cont->pil4,
                $cont->pil5,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Gaya Kepemimpinan Konsideran');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Gaya Kepemimpinan Konsideran', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Hubungan antara atasan dengan bawahan di tempat saya bekerja sangat dekat.',
                    'Di kantor saya, terdapat rasa saling percaya antara atasan dan bawahan.',
                    'Atasan di tempat saya bekerja menghargai gagasan dari bawahan.',
                    'Atasan di temapat saya bekerja menghargai kritikan dari bawahan.',
                    'Komunikasi antara atasan dan bawahan sangat terbuka dan menyenangkan.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont10AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('structure', 'structure.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'structure.pil1',
                'structure.pil2',
                'structure.pil3'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Gaya Kepemimpinan Structure');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Gaya Kepemimpinan Structure', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Atasan di tempat saya bekerja mampu berkomunikasi dengan bawahan secara jelas dan efektif.',
                    'Atasan di tempat saya bekerja selalu memberikan arahan yang benar dalam mengerjakan tugas.',
                    'Atasan di tempat saya bekerja selalu menekankan pekerjaan dengan memfokuskan pada tujuan dan hasil.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:C1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont11AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('time_budget', 'time_budget.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'time_budget.pil1',
                'time_budget.pil2',
                'time_budget.pil3'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Time Budget');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Time Budget', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Keterbatasan alokasi waktu yang diberikan (budget time) merupakan beban yang berat bagi saya.',
                    'Keterbatasan alokasi waktu audit tidak mengurangi kualitas pekerjaan saya.',
                    'Keterbatasan alokasi waktu dapat mengganggu proses pekerjaan yang seharusnya saya lakukan.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:C1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont12AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('kinerja', 'kinerja.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'kinerja.pil1',
                'kinerja.pil2',
                'kinerja.pil3'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Kinerja');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Kinerja', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya bekerja lebih baik (lebih efisien) dibandingkan rata-rata rekan kerja saya.',
                    'Saya menerima evaluasi kinerja yang memuaskan (melebihi standar yang ditetapkan perusahaan).',
                    'Pekerjaan saya sering dihargai/diapresiasi oleh auditee.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:C1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont13AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('turnover_intention', 'turnover_intention.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'turnover_intention.pil1',
                'turnover_intention.pil2',
                'turnover_intention.pil3',
                'turnover_intention.pil4'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
                $cont->pil4,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Turnover Intention');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Turnover Intention', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya ingin mencari pekerjaan selain profesi saya saat ini.',
                    'Saya ingin mencari pekerjaan selain pekerjaan saya saat ini.',
                    'Saya ingin pekerjaan lain dengan imbalan yang lebih tinggi.',
                    'Saya ingin mencari pekerjaan dengan jabatan yang lebih tinggi.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont14AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('promosi', 'promosi.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'promosi.pil1',
                'promosi.pil2',
                'promosi.pil3'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Promosi');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Promosi', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Kantor saya memberikan kesempatan promosi bagi setiap pegawai.',
                    'Promosi dapat meningkatkan pendapatan dan status sosial saya.',
                    'Di kantor saya ada prosedur yang jelas mengenai kenaikan jabatan.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:C1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont15AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('komunikasi', 'komunikasi.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'komunikasi.pil1',
                'komunikasi.pil2',
                'komunikasi.pil3',
                'komunikasi.pil4'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
                $cont->pil4,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Komunikasi');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Komunikasi', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Komunikasi antar atasan dan bawahan di kantor saya menyenangkan.',
                    'Komunikasi antar rekan kerja di kantor saya menyenangkan.',
                    'Pendelegasian kewenangan dan tanggung jawab di kantor ini jelas bagi saya.',
                    'Goals / tujuan (sasaran) yang ingin dituju oleh kantor ini jelas bagi saya.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function cont16AuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('co_worker', 'co_worker.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'co_worker.pil1',
                'co_worker.pil2',
                'co_worker.pil3',
                'co_worker.pil4'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->pil1,
                $cont->pil2,
                $cont->pil3,
                $cont->pil4,
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Co Worker');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Co Worker', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Saya menikmati bekerja dengan rekan kerja saya dikantor ini.',
                    'Saya dapat bekerja sama dengan baik dengan rekan kerja saya di kantor ini.',
                    'Saya suka bekerja sama dengan rekan kerja saya di kantor ini.',
                    'Saya tidak harus bekerja dengan keras karena kemampuan rekan kerja saya sudah memadai.'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }

    public function ksAuditorSmt(){
        $content = idauditorsmt::join('users', 'users.id', '=', 'identitaspersmt.user_id')
            ->join('saran', 'saran.identitas', '=', 'identitaspersmt.id_identitas')
            ->select(
                'users.id',
                'users.username',
                'saran.keluhan',
                'saran.saran'
            )->get();

        foreach ($content as $cont){
            $contentArray[] = array(
                $cont->id,
                $cont->username,
                $cont->keluhan,
                $cont->saran
            );
        }

        Excel::create('AuditorPerSmt', function ($excel) use($contentArray) {
            $excel->setTitle('Kesimpulan dan Saran');
            $excel->setCreator('Laravel')->setCompany('PLN', 'RHJ');
            $excel->setDescription('AuditorPerSmt File');

            $excel->sheet('Keluhan & Saran', function ($sheet) use($contentArray){
                $heading = [
                    'Id',
                    'Username',
                    'Keluhan',
                    'Saran'
                ];
                $sheet->fromArray($contentArray, null, 'A1', false, false);
                $sheet->prependRow(1, $heading);
                $sheet->cells('A1:D1', function ($cells) {
                    $cells->setFontWeight('bold');
                });
            });
        })->download('xlsx');
    }
}
