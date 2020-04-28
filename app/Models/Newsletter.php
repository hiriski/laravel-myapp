<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model {
    public $timestamps = false;
    protected $fillable = ['email'];
}
