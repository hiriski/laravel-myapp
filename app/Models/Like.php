<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    /** Polymorphic One To Many  */
    public function likeable() {
        return $this->morphTo();
    }
    
}
