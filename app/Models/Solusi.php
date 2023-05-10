<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;

    public $table = 't_solusi';

    protected $fillable = ['kode_solusi','nama_solusi'];
}
