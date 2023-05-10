<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DPsolusi extends Model
{
    use HasFactory;

    protected $table = "t_dpsolusi";

    protected $fillable = [
        'id_penyakit','id_solusi'
    ];

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(penyakit::class, 'id_penyakit', 'id');
    }

    public function solusi(): BelongsTo
    {
        return $this->belongsTo(Solusi::class, 'id_solusi', 'id');
    }
}
