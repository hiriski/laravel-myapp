<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {
    public function profiles() {
    	return $this->hasMany(Profile::class);
    }
}
