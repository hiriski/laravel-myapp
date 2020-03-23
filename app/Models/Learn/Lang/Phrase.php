<?php

namespace App\Models\Learn\Lang;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model {

	protected $table = 'learn_lang_phrases';

    protected $guarded = ['id'];

    /**
     * Many to one to User
     */
    public function user() {
    	return $this->belongsTo(\App\User::class, 'created_by');
    }
}
