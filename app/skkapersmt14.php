<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt14 extends Model
{
    protected $table = 'promosi';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'identitas'
    ];
}
