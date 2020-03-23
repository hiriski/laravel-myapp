<?php

namespace App\Models\Learn\Lang;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sentence extends Model {
    use SoftDeletes;
	
	protected $table = 'learn_lang_sentences';

    protected $guarded = ['id'];

    /**
     * Many to one to User
     */
    public function user() {
    	return $this->belongsTo(\App\User::class, 'created_by');
    }
}
