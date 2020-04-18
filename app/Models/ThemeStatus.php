<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeStatus extends Model {
    protected $table = 'theme_status';

    /** One to Many themes */
    public function thenes() {
        return $this->hasMany(\App\Models\Theme::class);
    }
}
