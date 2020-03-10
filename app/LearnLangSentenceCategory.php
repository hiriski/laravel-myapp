<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnLangSentenceCategory extends Model {
    public function sentence() {
        return $this->hasMany(LearnLangSentence::class);
    }
}
