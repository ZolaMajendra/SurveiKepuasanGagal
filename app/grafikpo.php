<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grafikpo extends Model
{
    protected $table = 'grafik_perpo';

    protected $fillable = [
        'sblm',
        'selama',
        'sesudah',
        'total'
    ];
}
