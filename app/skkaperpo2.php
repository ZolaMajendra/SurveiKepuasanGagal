<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkaperpo2 extends Model
{
    protected $table = 'sebelum_pelaksanaan_kegiatan_audit_dan_konsultasi';

    protected $fillable = [
        'erbas_sblm_audit_pilihan',
        'erbas_sblm_audit_isian',
        'minta_data_sblm_audit_pilihan',
        'minta_data_sblm_audit_isian',
        'mslh_uang_sblm_audit_pilihan',
        'mslh_uang_sblm_audit_isian',
        'sppd_sblm_audit_pilihan',
        'pembagian_ruang_lingkup_sblm_audit_pilihan',
        'pembagian_ruang_lingkup_sblm_audit_isian',
        'penentuan_kriteria_sblm_audit_pilihan',
        'penentuan_kriteria_sblm_audit_isian',
        'ruang_lingkup_terbebani_sblm_audit_pilihan',
        'ruang_lingkup_terbebani_sblm_audit_isian',
        'ruang_lingkup_spesifik_sblm_audit',
        'profile_risk_sblm_audit',
        'knowledge_sharing',
        'apqc_pilihan',
        'apqc_isian',
        'identitas'
    ];
}
