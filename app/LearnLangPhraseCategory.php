<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnLangPhaseCategory extends Model {
    
    protected $table = 'learn_lang_phrase_categories';

    public function phrase() {
        return $this->hasMany(LearnLangPhrase::class);
    }

}
