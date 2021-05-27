<?php

namespace App\Http\Resources;

use App\Models\Materials;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ProductResourse extends JsonResource
{
    /**
     * @var mixed
     */


    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_name'=>$this->product_name,
            'product_qty'=>$this->product_qty,
            'product_materials'=> ProductListResourse::collection( Repository::all()),
         ];
    }
}
