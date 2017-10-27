<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grafiksmt extends Model
{
    protected $table = 'grafik_persmt';

    protected $fillable = [
        'pelatihan',
        'organisasional',
        'profesional',
        'motivasi',
        'konflik',
        'lain',
        'konsideran',
        'structure',
        'time',
        'kinerja',
        'intent',
        'promo',
        'komunikasi',
        'cworker',
        'total'
    ];
}
