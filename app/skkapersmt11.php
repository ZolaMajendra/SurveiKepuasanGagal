<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt11 extends Model
{
    protected $table = 'time_budget';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'identitas'
    ];
}
