<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestt extends Model
{
    protected $table = 'request';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
