<?php

namespace App\Models;

use App\Models\penyakit;
use App\Models\Penyebab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DPpenyebab extends Model
{
    use HasFactory;

    protected $table = "t_dppenyebab";

    protected $fillable = [
        'id_penyakit','id_penyebab'
    ];

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(penyakit::class, 'id_penyakit', 'id');
    }

    public function penyebab(): BelongsTo
    {
        return $this->belongsTo(Penyebab::class, 'id_penyebab', 'id');
    }
}
