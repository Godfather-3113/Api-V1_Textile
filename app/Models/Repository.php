<?php

namespace App\Models;

use App\Http\Resources\ProductResourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    public function materials(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Materials::class);
    }

}
