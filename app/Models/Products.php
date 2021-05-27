<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static create(array $all)
 */
class Products extends Model
{
    use HasFactory;
    protected $fillable =['product_name','product_qty'];

    public function repository(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Repository::class);
    }
}
