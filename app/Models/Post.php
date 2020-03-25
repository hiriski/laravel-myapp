<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = array(
        'title', 'slug', 'description', 'keywords', 'content', 'user_id', 'category_id'
    );

    protected $hidden = array(
        'created_at', 'updated_at'
    );

    public function category() {
        return $this->belongsTo(\App\Models\PostCategory::class);
    }

    /** Polymorphic One To Many */
    public function likes() {
        return $this->morphMany(\App\Models\Like::class, 'likeable');
    }

    /** Polymorhphic Many to Many Tags */
    public function tags() {
        return $this->morphToMany(\App\Models\Tag::class, 'tagable');
    }
}
