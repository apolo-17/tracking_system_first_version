<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function typeUnit()
    {
        return $this->belongsTo(TypeUnit::class);
    }
}
