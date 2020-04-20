<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'request';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
