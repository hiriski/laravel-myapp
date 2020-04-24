<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTopic extends Model {
    protected $guarded = [];

    public function contact() {
        return $this->hasMany(\App\Models\Contact::class);
    }
}
