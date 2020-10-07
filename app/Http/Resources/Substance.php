<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Substance extends JsonResource
{
    /**
     * from doc
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;

    //public static $wrap = 'user';


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [

            'name' => $this->INN,
            'effect' => $this->mechanism,

        ];
    }
}
