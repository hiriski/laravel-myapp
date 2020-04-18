<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeCategory extends Model {
    // protected $table = 'theme_categories';

    /** One to Many "themes" */
    public function themes() {
        return $this->hasMany(\App\Models\Theme::class, 'category_id');
    }
}
