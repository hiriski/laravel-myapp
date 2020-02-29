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
}
