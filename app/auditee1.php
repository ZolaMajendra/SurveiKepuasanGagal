<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee1 extends Model
{
    protected $table = 'identitas_auditee';

    protected $fillable = [
        'id_identitas_auditee',
        'unit_pln',
        'tahun',
        'user_id'
    ];
}
