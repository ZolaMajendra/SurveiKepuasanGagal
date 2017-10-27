<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt13 extends Model
{
    protected $table = 'turnover_intention';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'pil4',
        'identitas'
    ];
}
