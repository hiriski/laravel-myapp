<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model {
  use SoftDeletes;
  protected $guarded = [];

  public function category() {
    return $this->belongsTo(\App\Models\WorkCategory::class);
  }
  
  public function tags() {
    return $this->belongsToMany(\App\Models\WorkTag::class);
  }

  public function user() {
    return $this->belongsTo(\App\Models\User::class);
  }
  
  public function status() {
    return $this->belongsTo(\App\Models\WorkStatus::class);
  }
}
