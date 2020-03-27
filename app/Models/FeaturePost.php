<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturePost extends Model {
    
    /** One to One (post) */
    public function post(){
        return $this->belongsTo(\App\Models\Blog::class);
    }
}
