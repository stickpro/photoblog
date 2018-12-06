<?php

namespace Photo;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function filter() {
        return $this->belongsTo('Photo\Filter', 'filter_alias','alias');
    }
}
