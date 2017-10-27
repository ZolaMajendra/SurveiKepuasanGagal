<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee2 extends Model
{
    protected $table = 'persepsi_manajemen_terhadap_spi';

    protected $fillable = [
        'kategori1a',
        'kategori1b',
        'kategori1c',
        'kategori1d',
        'identitas_auditee'
    ];
}
