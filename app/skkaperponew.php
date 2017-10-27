<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skkaperponew extends Model
{
    protected $table = 'pertanyaan_terbuka';

    protected $fillable = [
        'soal1',
        'soal2',
        'soal3',
        'soal4',
        'identitas'
    ];
}
