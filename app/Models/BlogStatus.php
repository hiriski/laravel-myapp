<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogStatus extends Model {
    
    protected $table = 'blog_status';

    /** One to Many Blog */
    public function blogs() {
        return $this->hasMany(\App\Models\Blog::class);
    }
}
