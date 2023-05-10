<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    
    public $incrementing = false;

    public $table = 't_datapasien';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'nama',
        'tanggal_lahir',
        'email',
        'no_telp',
        'jenis_kelamin'
    ];
}
