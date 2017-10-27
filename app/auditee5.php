<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee5 extends Model
{
    protected $table = 'pelaksanaan_audit';

    protected $fillable = [
        'kategori4a',
        'kategori4b',
        'kategori4c',
        'kategori4d',
        'kategori4e',
        'kategori4f',
        'identitas_auditee'
    ];
}
