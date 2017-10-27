<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt16 extends Model
{
    protected $table = 'co_worker';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'pil4',
        'identitas'
    ];
}
