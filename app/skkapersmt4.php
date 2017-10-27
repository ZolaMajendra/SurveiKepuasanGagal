<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt4 extends Model
{
    protected $table = 'komitemen_profesional';

    protected $fillable = [
        'luar_biasa_kesuksesan_ai',
        'saya_ai_pln',
        'inspirasi_kerja_terbaik',
        'perkembangan_ai',
        'ai_profesi_terbaik',
        'identitas'
    ];
}
