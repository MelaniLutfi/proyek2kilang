<?php

namespace App\Models;

use App\Models\gejala;
use App\Models\Solusi;
use App\Models\Penyebab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPenyakit extends Model
{
    use HasFactory;

    protected $table = "t_penyakit";

    public function gejala()
    {
        return $this->belongsTo(gejala::class, 't_dpgejala', 'kode_penyakit', 'kode_gejala');
    }

    public function dpPenyebab()
    {
        return $this->belongsToMany(Penyebab::class, 't_dppenyebab', 'id_penyakit', 'id_penyebab');
    }

    public function dpSolusi()
    {
        return $this->belongsToMany(Solusi::class, 't_dpsolusi', 'id_penyakit', 'id_solusi');
    }
}
