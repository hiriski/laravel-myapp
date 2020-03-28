<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** include user relation */
use App\Http\Resources\UserProfile as UserProfileResource;

/** include category relation */
use App\Http\Resources\BlogCategory as BlogCategoryResource;

class Blog extends JsonResource {
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
            'title'         => $this->title,
            'description'   => $this->description,
            'keywords'      => $this->keywords,
            'content'       => $this->content,
            'user'          => new UserProfileResource($this->user),
            'category'      => new BlogCategoryResource($this->category),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
