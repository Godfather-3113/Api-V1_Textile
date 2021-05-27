<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialList extends Model
{
    use HasFactory;

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Products::class);
    }
    public function material(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Materials::class);
    }

}
