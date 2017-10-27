<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idauditor extends Model
{
    protected $table = 'identitas';

    protected $fillable = [
        'id_identitas',
        'unit',
        'up_audit',
        'tahun',
        'user_id'
    ];
}
