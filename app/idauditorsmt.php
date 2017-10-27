<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idauditorsmt extends Model
{
    protected $table = 'identitaspersmt';

    protected $fillable = [
        'id_identitas',
        'unit',
        'semester',
        'tahun',
        'user_id'
    ];
}
