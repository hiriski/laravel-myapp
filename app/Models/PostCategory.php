<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model {
    public function posts() {
        return $this->hasMany(\App\Models\Post::class);
    }
}
