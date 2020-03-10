<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearnLangSentence extends Model {

    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    protected $fillable = array(
        'slug',
        'indonesia',
        'english',
        'vietnamese',
        'notes',
        'reference',
        'user_id',
        'category_id',
        'level_id',
    );
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function updator() {
        return $this->belongsTo(User::class, 'updated_by'); // parameter kedua adalah foreign key
    }

    public function category() {
        return $this->belongsTo(LearnLangSentenceCategory::class);
    }
}
