<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Profile extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        // return parent::toArray($request);
        return [
            'first_name'        => $this->first_name,
            'last_name'         => $this->last_name,
            'image_sm'          => $this->image_sm,
            'image_md'          => $this->image_md,
            'image'             => $this->image,
            'background_image'  => $this->background_image,
            'facebook_url'      => $this->facebook_url,
            'instagram_url'     => $this->instagram_url,
            'twitter_url'       => $this->twitter_url,
            'linkedin_url'      => $this->linkedin_url,
            'github_url'        => $this->github_url,
            'codepen_url'       => $this->codepen_url,
            'whatsapp'          => $this->whatsapp
        ];
    }
}
