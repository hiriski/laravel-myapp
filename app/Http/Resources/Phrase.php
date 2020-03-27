<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** User Resource */
use App\Http\Resources\User as UserResource;

class Phrase extends JsonResource {
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
            'vietnam'       => $this->vietnam,
            // 'created_by'    => UserResource::collection($this->user),
            'created_by'    => new UserResource($this->user),
            'updated_by'    => new UserResource($this->updator),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
