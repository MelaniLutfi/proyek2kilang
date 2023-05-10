<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyebab extends Model
{
    use HasFactory;

    public $table = 't_penyebab';

    protected $fillable = [
        'kode_penyebab','nama_penyebab'
    ];
}
