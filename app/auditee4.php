<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee4 extends Model
{
    protected $table = 'ruang_lingkup_pekerjaan_audit';

    protected $fillable = [
        'kategori3a',
        'kategori3b',
        'kategori3c',
        'kategori3d',
        'identitas_auditee'
    ];
}
