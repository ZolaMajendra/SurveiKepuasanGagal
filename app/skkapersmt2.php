<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt2 extends Model
{
    protected $table = 'pelatihan_kompetensi';

    protected $fillable = [
        'jenjang_pendidikan',
        'pelatihan_khusus',
        'seminar_diluar_pln',
        'kemampuan_masalah',
        'kemampuan_rekomendasi',
        'kerjasama_tim',
        'identitas'
    ];
}
