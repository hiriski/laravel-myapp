<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model {
    
    /** Many to Many to blogs */
    public function blogs() {
        return $this->belongsToMany(\App\Models\Blog::class, 'blog_tag_blog', 'tag_id', 'blog_id');
    }

}
