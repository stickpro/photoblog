<?php

namespace Photo;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function articles() {
        return $this->belongsTo('Photo\Articles');
    }
    public function user() {
        return $this->belongsTo('Photo\User');
    }
}
