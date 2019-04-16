<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediacenter extends Model
{
    protected $fillable = ['user_id', 'path', 'title', 'description', 'url'];
}
