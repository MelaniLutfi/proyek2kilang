<?php

namespace App\Models;

use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DPgejala extends Model
{

    public $table = 't_dpgejala';

    public $fillable =[
        'kode_penyakit',
        'kode_gejala',
          
    ];

    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'kode_gejala', 'kode_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo(penyakit::class, 'kode_penyakit', 'kode_penyakit');
    }
}
