<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditee7 extends Model
{
    protected $table = 'nilai_tambah';

    protected $fillable = [
        'nilaia',
        'nilaib',
        'nilaic',
        'identitas_auditee'
    ];
}
