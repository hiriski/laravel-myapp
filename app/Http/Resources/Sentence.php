<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sentence extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        // return parent::toArray($request);
        return [
            'id'            => $this->id,
            'english'       => $this->english,
            'indonesia'     => $this->indonesia,
            'vietnam'       => $this->vietma,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
