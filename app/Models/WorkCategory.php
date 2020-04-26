<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkCategory extends Model {
    protected $guarded = [];

    public function works() {
        return $this->hasMany(\App\Models\Work::class);
    }
}
