<?php

namespace App\Model\Learn\Lang;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
