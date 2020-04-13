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

    /** Many to one blog category */
    public function category() {
        return $this->belongsTo(\App\Models\BlogCategory::class);
    }

    /** Many to Many to Tags */
    public function tags() {
        return $this->belongsToMany(\App\Models\BlogTag::class, 'blog_tag_blog', 'blog_id', 'tag_id');
    }

    /** Many to one blog status */
    public function status() {
        return $this->belongsTo(\App\Models\BlogStatus::class);
    }

    /** One to One - Feature Post */
    public function featured_post() {
        return $this->hasOne(\App\Models\FeaturePost::class);
    }

    /** Many to One - User */
    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
    
}
