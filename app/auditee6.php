<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee6 extends Model
{
    protected $table = 'proses_dan_laporan_audit';

    protected $fillable = [
        'kategori5a',
        'kategori5b',
        'kategori5c',
        'kategori5d',
        'kategori5e',
        'identitas_auditee'
    ];
}
