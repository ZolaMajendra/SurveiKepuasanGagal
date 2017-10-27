<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $table = 'berkas';

    protected $fillable = [
        'unit_spi',
        'semester',
        'tahun',
        'file_title',
        'file_name',
        'status'
    ];
}
