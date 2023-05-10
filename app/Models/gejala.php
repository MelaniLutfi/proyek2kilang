<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    public $table = "t_gejala";
    // protected $primaryKey = 'kode_gejala';
    protected $fillable = [
        'kode_gejala','nama_gejala'
    ];

    public function penyakit()
    {
        return $this->belongsToMany(penyakit::class, 't_dpgejala', 'kode_penyakit', 'kode_gejala');
    }
}
