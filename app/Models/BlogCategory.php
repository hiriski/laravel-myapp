<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model {
    public function blog(){
        return $this->belongsTo(\App\Models\BlogCategory::class);
    }
}
