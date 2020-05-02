<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
  protected $guarded = [];
  public $timestamps = false;
  
  public function language() {
    return $this->belongsTo(\App\Models\Language::class);
  }

  /** Check setting for show featured post in homepage 
   * @return boolean
  */
  public function showFeaturedPost() {
    if($this->show_featured_post) {
			return true;
    }
  }
  
  /** Check setting for show blog in homepage 
   * @return boolan
  */
  public function showBlog() {
    if($this->show_blog_homepage) {
      return true;
    }
  }

  /** Check setting for show work in homepage 
   * @return boolan
  */
  public function showWork() {
    if($this->show_work_homepage) {
      return true;
    }
  }
	
}
