<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    public function teams() {
        return $this->belongsTo(users);
    }
}
