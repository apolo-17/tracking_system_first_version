<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $casts = [
        'licence_date_expiry' => 'date',
        'born_date' => 'date'
    ];

    protected $appends = ['name'];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function units()
    {
        return $this->belongsTo(Unit::class);
    }

    public function getNameAttribute()
    {
        return $this->user->name;
    }
}
