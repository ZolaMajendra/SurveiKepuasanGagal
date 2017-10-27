<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt3 extends Model
{
    protected $table = 'komitmen_organisasional';

    protected $fillable = [
        'emosional',
        'berarti',
        'bagian',
        'masalah_pln',
        'batas_normal',
        'tinggal_komitmen',
        'loyalitas',
        'identitas'
    ];
}
