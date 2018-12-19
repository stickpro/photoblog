<?php

namespace Photo;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user() {
        return $this->belongsTo('Photo\User');
    }
    public function category() {
        return $this->belongsTo('Photo\Category');
    }
    public function comments() {
        return $this->hasMany('Photo\Comment');
    }


}
