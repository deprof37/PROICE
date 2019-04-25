<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = ['user_id', 'first_name', 'last_name', 'fb_link', 'position', 'tw_link', 'path'];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}
