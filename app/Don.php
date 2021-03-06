<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
