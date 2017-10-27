<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt5 extends Model
{
    protected $table = 'motivasi_kerja';

    protected $fillable = [
        'maksimal_hasil_terbaik',
        'tugas_tepat_waktu',
        'dekat_ke_atasan',
        'saran_membangun',
        'terbaik_daripada_rekan',
        'evaluasi_selalu_memuaskan',
        'respect_pada_saya',
        'hubungan_baik_auditee',
        'identitas'
    ];
}
