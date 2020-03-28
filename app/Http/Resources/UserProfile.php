<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** include relation profile */
use App\Http\Resources\Profile as ProfileResource;

class UserProfile extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        // return parent::toArray($request);

        /** user with profile relation */
        return [
            'name'      => $this->name,
            'email'     => $this->name,
            'slug'      => $this->slug,
            'profile'   => new ProfileResource($this->profile),
        ];
    }
}
