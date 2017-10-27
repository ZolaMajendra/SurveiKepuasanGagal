<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt7 extends Model
{
    protected $table = 'lain_lain';

    protected $fillable = [
        'puas_gaji',
        'suka_pekerjaan',
        'tidak_ingin_pindah',
        'suka_daripada_teman',
        'promosi',
        'puas_penilaian_kinerja_ai',
        'puas_pengelolaan_karir_ai',
        'rotasi_pegawai_ai',
        'identitas'
    ];
}
