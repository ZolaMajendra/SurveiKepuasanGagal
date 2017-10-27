<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grafikauditee extends Model
{
    protected $table = 'grafik_auditee';

    protected $fillable = [
        'persepsi',
        'internal',
        'lingkup',
        'pelaksanaan',
        'proses',
        'total'
    ];
}
