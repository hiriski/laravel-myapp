<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model {

    protected $table = 'blog_categories';

    /** One to Many "blogs" */
    public function blogs() {
        return $this->hasMany(\App\Models\Blog::class, 'category_id');
    }
}
