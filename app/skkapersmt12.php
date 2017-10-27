<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt12 extends Model
{
    protected $table = 'kinerja';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'identitas'
    ];
}
