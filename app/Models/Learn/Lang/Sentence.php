<?php

namespace App\Models\Learn\Lang;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sentence extends Model {
    use SoftDeletes;
	
	protected $table = 'learn_lang_sentences';

    protected $guarded = ['id'];

    /** Many to one : Sentence to User */
    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }

    /** Polymorphic One To Many */
    public function likes() {
        return $this->morphMany(\App\Models\Like::class, 'likeable');
    }

    /** Polymorhphic Many to Many Tags */
    public function tags() {
        return $this->morphToMany(\App\Models\Tag::class, 'tagable');
    }

}
