<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt9 extends Model
{
    protected $table = 'konsideran';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'pil4',
        'pil5',
        'identitas'
    ];
}
