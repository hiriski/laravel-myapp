<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Work extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'slug'          => $this->slug,
            'url'           => $this->url,
            'description'   => $this->description,
            'image_xs'      => $this->image_xs,
            'image_md'      => $this->image_md,
            'image'         => $this->image,
            'category'      => $this->category->name,
            'user'          => $this->user,
        ];
    }
}
