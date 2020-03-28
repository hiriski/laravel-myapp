<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {
    use SoftDeletes;
    
    // protected $fillable = array(
    //     'title', 'description', 'keywords', 'body', 'slug'
    // );

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(\App\Models\BlogCategory::class);
    }

    /** One to One - Feature Post */
    public function featured_post() {
        return $this->hasOne(\App\Models\FeaturePost::class);
    }
}
