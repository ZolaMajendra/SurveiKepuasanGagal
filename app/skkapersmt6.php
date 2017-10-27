<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt6 extends Model
{
    protected $table = 'konflik_peran';

    protected $fillable = [
        'tidak_melanggar_aturan',
        'kesesuaian_tugas',
        'diterima_wajar',
        'tugas_tidak_wajar',
        'sd_cukup',
        'identitas'
    ];
}
