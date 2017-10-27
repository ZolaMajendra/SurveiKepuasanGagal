<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkaperpo3 extends Model
{
    protected $table = 'selama_pelaksanaan_kegiatan_audit_dan_konsultasi';

    protected $fillable = [
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
        'identitas'
    ];
}
