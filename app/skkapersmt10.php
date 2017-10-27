<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt10 extends Model
{
    protected $table = 'structure';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'identitas'
    ];
}
