<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeTag extends Model {
    /** Many to Many to themes */
    public function themes() {
        return $this->belongsToMany(\App\Models\Theme::class, 'theme_tag_theme', 'tag_id', 'theme_id');
    }
}
