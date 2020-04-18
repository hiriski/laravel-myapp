<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/** My Works (Theme) */
class Theme extends Model {
    use SoftDeletes;

    protected $guarded = [];

    /** Many to one theme category */
    public function category() {
        return $this->belongsTo(\App\Models\ThemeCategory::class);
    }

    /** Many to Many to Tags */
    public function tags() {
        return $this->belongsToMany(\App\Models\ThemeTag::class, 'theme_tag_theme', 'theme_id', 'tag_id');
    }

    /** Many to one blog status */
    public function status() {
        return $this->belongsTo(\App\Models\ThemeStatus::class);
    }

    /** Many to One - User */
    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }

    /** Polymorphic One to Many (testimonials) */
    public function testimonials() {
        return $this->morphMany(\App\Models\Testimonial::class, 'testimoniable');
    }
    
}
