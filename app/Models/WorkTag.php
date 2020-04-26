<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTag extends Model {
    protected $guarded = [];

    public function works() {
        return $this->belongsToMany(\App\Models\Work::class);
    }
}
