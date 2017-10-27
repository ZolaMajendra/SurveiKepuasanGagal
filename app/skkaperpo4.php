<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkaperpo4 extends Model
{
    protected $table = 'setelah_pelaksanaan_kegiatan_audit_dan_konsultasi';

    protected $fillable = [
        'erbas_setelah_audit_pilihan',
        'erbas_setelah_audit_isian',
        'rekomendasi',
        'evidence',
        'sppd_setelah_audit',
        'identitas'
    ];
}
