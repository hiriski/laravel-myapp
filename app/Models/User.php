<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	/** One to one user to profile */
    public function profile() {
    	return $this->hasOne(\App\Models\Profile::class);
    }
}
