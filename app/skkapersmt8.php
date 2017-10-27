<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkapersmt8 extends Model
{
    protected $table = 'saran';

    protected $fillable = [
        'keluhan',
        'saran',
        'identitas'
    ];
}
