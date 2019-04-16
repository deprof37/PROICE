<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['user_id', 'name', 'path'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
