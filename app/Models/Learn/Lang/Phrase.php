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

    /** Polymorphic One To Many */
    public function likes() {
        return $this->morphMany(\App\Models\Like::class, 'likeable');
    }

    /** Polymorhphic Many to Many Tags */
    public function tags() {
        return $this->morphToMany(\App\Models\Tag::class, 'tagable');
    }

}
