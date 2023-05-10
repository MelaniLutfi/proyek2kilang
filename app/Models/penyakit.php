<?php

namespace App\Models;

use App\Models\gejala;
use App\Models\DPgejala;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class penyakit extends Model
{
    public $table = "t_penyakit";

    protected $fillable = [
        'kode_penyakit','nama_penyakit','deskripsi'
    ];

    public function dpPenyebab()
    {
        return $this->belongsToMany(Penyebab::class, 't_dppenyebab', 'id_penyakit', 'id_penyebab');
    }

    public function dpSolusi()
    {
        return $this->belongsToMany(Solusi::class, 't_dpsolusi', 'id_penyakit', 'id_solusi');
    }

    /**
     * The gejala that belong to the penyakit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function gejala(): BelongsToMany
    {
        return $this->belongsToMany(gejala::class,'t_dpgejala', 'kode_penyakit', 'kode_gejala');
    }
}
