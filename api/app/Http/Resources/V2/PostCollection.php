<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    //public $collects = PostResource::class;
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'data'=> $this->collection,
            'meta'=>[
                'organization' => 'Platzi',
                'authors'      => [
                    'Italomorales',
                    'Platzi'
                ]
            ],
            'type' => 'Articles'
        ];
    }
}
