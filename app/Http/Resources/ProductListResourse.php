<?php

namespace App\Http\Resources;

use App\Models\Materials;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ProductListResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request

     */
    public function toArray($request)
    {
        return [
            'warehouse_id'=>$this->warehouse_id,
//            'materials_name'=>$this->materials_id,
            'materials_name'=> new MaterialResourse($this->materials),
            'remainder'=>$this->remainder,
            'price'=>$this->price,
        ];
    }
}
