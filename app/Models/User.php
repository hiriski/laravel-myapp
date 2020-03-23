<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /** One to one : User to Profile */
    public function profile() {
        return $this->hasOne(\App\Models\Profile::class);
    }

    /** One to many : User to Phrase */
    public function phrases() {
        return $this->hasMany(\App\Models\Phrase::class);
    }

    /** One to many : User to Sentence */
    public function sentences() {
        return $this->hasMany(\App\Models\Sentence::class);
    }

}
