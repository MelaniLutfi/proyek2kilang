<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapasien extends Model
{
    use HasFactory;

    public $table = "t_datapasien";
    
    public $incrementing = false;
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'nama',
        'tanggal_lahir',
        'email',
        'no_telp',
        'jenis_kelamin'
    ];
}

