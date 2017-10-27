<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt15 extends Model
{
    protected $table = 'komunikasi';

    protected $fillable = [
        'pil1',
        'pil2',
        'pil3',
        'pil4',
        'identitas'
    ];
}
