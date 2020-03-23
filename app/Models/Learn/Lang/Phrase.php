<?php

namespace App\Models\Learn\Lang;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model {

	protected $table = 'learn_lang_phrases';

    protected $guarded = ['id'];

    /** Many to one : Phrases to User */
    public function user() {
    	return $this->belongsTo(\App\Models\User::class, 'created_by');
    }
}
