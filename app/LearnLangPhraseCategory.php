<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnLangPhraseCategory extends Model {
    
    protected $table = 'learn_lang_phrase_categories';

    public function phrase() {
        return $this->hasMany(LearnLangPhrase::class);
    }

}
