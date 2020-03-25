<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/** One to one : profile to user */
    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
    
}
