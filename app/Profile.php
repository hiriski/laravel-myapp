<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
     * Relasi antara profile dan user
     */
    public function user() {
        return $this->hasOne(User::class);
    }


    /**
     * Relasi antara profile dan bahasa
     */
    public function language() {
    	return $this->belongsTo(Language::class);
    } 
}
