<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = array(
        'title', 'slug', 'description', 'keywords', 'content', 'user_id', 'category_id'
    );

    protected $hidden = array(
        'created_at', 'updated_at'
    );

    public function category() {
        return $this->belongsTo(PostCategory::class);
    }
}
