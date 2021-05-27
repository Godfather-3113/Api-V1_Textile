<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;

    public function repository(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Repository::class);
    }

    public function materialList(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(MaterialList::class);
    }
}
