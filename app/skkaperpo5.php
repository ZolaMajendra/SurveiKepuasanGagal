<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkaperpo5 extends Model
{
    protected $table = 'keluhan_dan_saran';

    protected $fillable = [
        'keluhan',
        'saran',
        'identitas'
    ];
}
