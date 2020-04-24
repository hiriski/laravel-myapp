<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    protected $guarded      = [];
    public $timestamps   = false;

    public function topic() {
        return $this->belongsTo(\App\Models\ContactTopic::class);
    }
}
