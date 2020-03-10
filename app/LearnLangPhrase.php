<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearnLangPhrase extends Model {

    use SoftDeletes;
    protected $dates = array('deleted_at');

    protected $fillable = array(
        'indonesia',
        'english',
        'vietnam',
        'notes',
        'user_id',
        'category_id',
        'updated_by',
    );

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function updator() {
        return $this->belongsTo(User::class, 'updated_by'); // parameter kedua adalah foreign key
    }

    public function category() {
        return $this->belongsTo(LearnLangPhraseCategory::class);
    }
}
