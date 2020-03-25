<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    
    /** Polymorphic Many to Many - Posts */
    public function posts() {
        return $this->morphedByMany(\Models\Post::class, 'tagable');
    }

    /** Polymorphic Many to Many - Sentence */
    public function sentences() {
        return $this->morphedByMany(\Models\Learn\Lang\Sentence::class, 'tagable');
    }

    /** Polymorphic Many to Many - Phrase */
    public function phrases() {
        return $this->morphedByMany(\Models\Learn\Lang\Phrase::class, 'tagable');
    }

    
}
