<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model {
    public function blogs() {
        return $this->hasMany(\App\Models\Blog::class);
    }
}
