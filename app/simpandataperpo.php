<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class simpandataperpo extends Model
{
    protected $table = 'simpan_perpo_new';

    protected $fillable = [
        'id',
        'user_id',
        'unit',
        'up_audit',
        'tahun',
        'soal1',
        'soal2',
        'soal3',
        'soal4'
    ];
}

/*class simpandataperpo extends Model
{
    protected $table = 'simpan_perpo';

    protected $fillable = [
        'id',
        'user_id',
        'jenis_kelamin',
        'jabatan_terakhir',
        'pengalaman_kerja',
        'unit',
        'up_audit',
        'tahun',
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
        'sarana_selama_audit_pilihan',
        'sarana_selama_audit_isian',
        'minta_data_selama_audit_pilihan',
        'minta_data_selama_audit_isian',
        'kelengkapan_data_selama_audit_pilihan',
        'profile_risk_selama_audit_pilihan',
        'erbas_selama_audit_pilihan',
        'erbas_selama_audit_isian',
        'uji_petik_pilihan',
        'uji_petik_isian',
        'kooperatif_selama_audit_pilihan',
        'kooperatif_selama_audit_isian',
        'jumlah_sdm',
        'kemampuan_sdm',
        'hotel_pilihan',
        'hotel_isian',
        'sulit_ditemui_selam_audit_pilihan',
        'erbas_setelah_audit_pilihan',
        'erbas_setelah_audit_isian',
        'rekomendasi',
        'evidence',
        'sppd_setelah_audit',
        'keluhan',
        'saran'
    ];
}*/
